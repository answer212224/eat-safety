<?php

namespace App\Http\Controllers;

use App\Imports\TaskImport;
use Carbon\Carbon;
use App\Models\Meal;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use App\Models\RestaurantWorkspace;
use Maatwebsite\Excel\Facades\Excel;



class TaskController extends Controller
{
    public function list()
    {
        $title = '任務清單';

        $tasks = optional(auth()->user()->tasks)->load('users');
        if (!empty($tasks)) {
            // 任務根據最靠近現在的日期和時間排序
            $tasks = $tasks->sortBy(function ($task) {
                return abs(Carbon::parse($task->task_date)->diffInMinutes(Carbon::now()));
            });
        } elseif (auth()->user()->can('view-all-task')) {
            $tasks = Task::all()->load('users');
        } else {
            $tasks = [];
        }

        return view('backend.tasks.list', compact('title', 'tasks'));
    }

    public function create(Task $task)
    {
        // 如果任務時間不是今日日期，就不能開始稽核，只判斷日期是否為今日日期
        if (Carbon::parse($task->task_date)->format('Y-m-d') != Carbon::today()->format('Y-m-d')) {
            alert()->error('錯誤', '只能在任務日期當天開始稽核');
            return back();
        }

        // 如果該任務已經完成，就不能再開始稽核
        if ($task->taskUsers->where('user_id', auth()->user()->id)->first()->is_completed) {
            alert()->error('錯誤', '您已經完成該稽核，請取消完成稽核狀態後再開始稽核');
            return back();
        }

        $title = '開始稽核';
        // 取得$task->restaurant->restaurantWorkspaces status = 1 的 r
        $restaurantWorkspaces = $task->restaurant->restaurantWorkspaces->where('status', 1);

        // 假如已有開始時間，就不要再更新開始時間
        if (empty($task->start_at)) {
            $task->start_at = Carbon::now();
            $task->save();
        }

        return view('backend.tasks.create', compact('title', 'task', 'restaurantWorkspaces'));
    }

    public function mealCheck(Task $task)
    {
        // 如果任務時間不是今日日期，就不能開始採樣，只判斷日期是否為今日日期
        // if (Carbon::parse($task->task_date)->format('Y-m-d') != Carbon::today()->format('Y-m-d')) {
        //     alert()->error('錯誤', '只能在任務日期當天開始採樣');
        //     return back();
        // }
        $title = '開始採樣';

        return view('backend.tasks.meals.check', compact('title', 'task'));
    }

    public function projectCheck(Task $task)
    {
        // 如果任務時間不是今日日期，就不能開始專案，只判斷日期是否為今日日期
        // if (Carbon::parse($task->task_date)->format('Y-m-d') != Carbon::today()->format('Y-m-d')) {
        //     alert()->error('錯誤', '只能在任務日期當天開始專案');
        //     return back();
        // }
        $title = '開始專案';

        return view('backend.tasks.projects.check', compact('title', 'task'));
    }


    public function mealCheckSubmit(Request $request, Task $task)
    {

        $data = $request->all();

        $task->meals()->update([
            'is_taken' => false,
        ]);

        if (!empty($data['is_takens'])) {
            $task->meals()->updateExistingPivot($data['is_takens'], [
                'is_taken' => true,
            ]);
        }

        if (!empty($data['memos'])) {
            foreach ($data['memos'] as $meal_id => $memo) {
                $task->meals()->updateExistingPivot($meal_id, [
                    'memo' => $memo,
                ]);
            }
        }

        if ($task->category == '餐點採樣') {
            $task->update([
                'status' => 'completed',
            ]);
            $task->taskUsers()->update([
                'is_completed' => true,
            ]);
        }

        alert()->success('採樣完畢', '採樣成功');

        return redirect()->route('task-list');
    }

    public function projectCheckSubmit(Request $request, Task $task)
    {
        $data = $request->all();

        $task->projects()->update([
            'is_checked' => false,
        ]);

        if (!empty($data['projects'])) {
            $task->projects()->updateExistingPivot($data['projects'], [
                'is_checked' => true,
            ]);
        }

        alert()->success('專案確認完畢', '專案更新成功');
        return redirect()->route('task-list');
    }


    public function assign()
    {
        $title = '指派任務';
        // 如果有 view-all-task 的權限，就可以看到所有的任務
        if (auth()->user()->can('view-all-task')) {
            $tasks = Task::all()->load('users');
        } else {
            // 否則就只能看到自己的任務
            $tasks = Task::whereHas('users', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->get()->load('users');
        }

        $tasks->transform(function ($task) {
            // 如果是 pending 就顯示未稽核，如果是 processing 就顯示稽核中，如果是 pending_approval 就顯示待核對，如果是 completed 就顯示已完成
            if ($task->status == 'pending') {
                $status = '未稽核';
            } elseif ($task->status == 'processing') {
                $status = '稽核中';
            } elseif ($task->status == 'pending_approval') {
                $status = '待核對';
            } elseif ($task->status == 'completed') {
                $status = '已完成';
            }

            // 任務的 title 顯示品牌、類別、使用者名稱、任務日期顯示7/9、任務狀態
            $task->title = $task->restaurant->brand_code . $task->restaurant->shop . ' ' . $task->category . ' ' . $task->users->pluck('name')->implode('、') . ' ' . Carbon::parse($task->task_date)->format('n月j日') . ' ' . $status;

            // 任務的 start 顯示任務日期
            $task->start = $task->task_date;
            $task->url = route('task-edit', $task->id);

            return $task;
        });

        return view('backend.tasks.assign', compact('title', 'tasks'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['task_date'] = Carbon::parse($data['task_date']);

        // 檢查是否有重複的任務
        foreach ($data['users'] as $userId) {
            $user = User::find($userId);
            // 如果該使用者已經有相同日期和相同店家，就要提醒
            $task = $user->tasks()->whereDate('task_date', $data['task_date']->format('Y-m-d'))->where('restaurant_id', $data['restaurant_id'])->first();
            if ($task) {
                alert()->warning('請確認', $user->name . '在' . Carbon::parse($task->task_date)->format('Y-m-d') . '已經有' . $task->restaurant->brand_code . $task->restaurant->shop . '的任務');
            }

            // 如果該使用者新增的稽核任務的使用者當天有不同地區的任務，就要提醒
            $userTasks = $user->tasks()->whereDate('task_date', $data['task_date']->format('Y-m-d'))->get();
            foreach ($userTasks as $userTask) {
                if ($userTask->restaurant->location != Restaurant::find($data['restaurant_id'])->location) {
                    alert()->warning('請確認', $user->name . '當天有不同地區的任務');
                }
            }
        }

        // 檢查當日是否有相同分店和相同類別的任務
        $task = Task::whereDate('task_date', $data['task_date']->format('Y-m-d'))->where('restaurant_id', $data['restaurant_id'])->where('category', $data['category'])->first();
        if ($task) {
            alert()->warning('請確認', Carbon::parse($task->task_date)->format('Y-m-d') . '已經有' . $task->restaurant->brand_code . $task->restaurant->shop . '的' . $task->category . '任務');
        }

        $task = Task::create([
            'category' => $data['category'],
            'restaurant_id' => $data['restaurant_id'],
            'task_date' => $data['task_date'],
        ]);

        $task->users()->attach($data['users']);

        // 如果有選擇預設餐點，就新增預設餐點
        if (!empty($data['defaltMeals'])) {
            $task->meals()->attach($data['defaltMeals']);
        }

        if (!empty($data['optionMeals'])) {
            $task->meals()->attach($data['optionMeals']);
        }

        if (!empty($data['projects'])) {
            $task->projects()->attach($data['projects']);
        }

        return back();
    }

    public function edit(Task $task)
    {
        $title = '編輯或查看稽核';
        $score = 100;
        // 取得role是auditor的使用者
        $users = User::role('auditor')->get();
        $projects = Project::where('status', 1)->get();

        confirmDelete('確認刪除?', "確認刪除任務: {$task->task_date}{$task->category}-{$task->restaurant->brand}{$task->restaurant->shop}，刪除後無法還原，請確認是否刪除");

        // 這邊要先 load 關聯，不然會有 N+1 問題
        $task = $task->load(['taskHasDefects.defect', 'taskHasClearDefects.clearDefect', 'taskHasDefects.user', 'meals', 'restaurant.restaurantBackWorkspaces']);

        $taskDate = Carbon::create($task->task_date);
        // 取得店家的品牌代號
        $brandSid = Str::substr($task->restaurant->sid, 0, 2);

        // 取得該品牌當月的餐點
        $optionMeals = Meal::whereYear('effective_date', $taskDate)
            ->whereMonth('effective_date', $taskDate)
            ->where('sid', $task->restaurant->sid)
            ->get();

        // 取得該品牌當月的餐點
        $defaltMeals = Meal::whereYear('effective_date', $taskDate)
            ->whereMonth('effective_date', $taskDate)
            ->where('sid', $brandSid)
            ->get();

        // 這邊要用 merge，因為有些店家會有自己的餐點
        $meals = $defaltMeals->merge($optionMeals);

        if ($task->category == '食安及5S') {
            $defectsGroup = $task->taskHasDefects->groupBy('restaurant_workspace_id');
            // 只取得內場的缺失
            $backTask = $task->taskHasDefects->whereIn('restaurant_workspace_id', $task->restaurant->restaurantBackWorkspaces->pluck('id'))->load('defect');
            $backScore = $backTask->sum(function ($item) {
                // 只計算需要扣分的缺失
                if (!$item->is_ignore) {
                    return $item->defect->deduct_point;
                }
            });
            // 只取得外場的缺失
            $frontTask = $task->taskHasDefects->where('restaurant_workspace_id', $task->restaurant->restaurantFrontWorkspace->id)->load('defect');
            $frontScore = $frontTask->sum(function ($item) {
                // 只計算需要扣分的缺失
                if (!$item->is_ignore) {
                    return $item->defect->deduct_point;
                }
            });
        } else {
            $defectsGroup = $task->taskHasClearDefects->groupBy('restaurant_workspace_id');
            // 只取得內場的缺失
            $backTask = $task->taskHasClearDefects->whereIn('restaurant_workspace_id', $task->restaurant->restaurantBackWorkspaces->pluck('id'))->load('clearDefect');
            $backScore = $backTask->sum(function ($item) {
                // 只計算需要扣分的缺失
                if (!$item->is_ignore) {
                    return $item->clearDefect->deduct_point * $item->amount;
                }
            });
            // 只取得外場的缺失
            $frontTask = $task->taskHasClearDefects->where('restaurant_workspace_id', $task->restaurant->restaurantFrontWorkspace->id)->load('clearDefect');
            $frontScore = $frontTask->sum(function ($item) {
                // 只計算需要扣分的缺失
                if (!$item->is_ignore) {
                    return $item->clearDefect->deduct_point * $item->amount;
                }
            });
        }
        return view('backend.tasks.edit', compact('task', 'title', 'defectsGroup', 'meals', 'backScore', 'frontScore', 'users', 'projects'));
    }

    public function update(Task $task, Request $request)
    {
        $task->users()->sync($request->users);
        $task->projects()->sync($request->projects);
        $task->meals()->sync($request->meals);
        $task->update([
            'task_date' => $request->task_date,
            'status' => $request->status,
        ]);

        alert()->success('更新成功', '更新任務成功');

        return back();
    }

    public function sign(Task $task, Request $request)
    {
        if ($task->status == 'completed') {
            alert()->warning('無法簽名', '任務已經完成');
            return back();
        }

        $task->update([
            'end_at' => Carbon::now(),
            'outer_manager' => $request->outer_manager,
            'inner_manager' => $request->inner_manager,
            'status' => 'completed',
        ]);

        alert()->success('核對完畢', '簽名成功');

        return redirect()->route('task-list');
    }

    public function destroy(Task $task)
    {
        if ($task->status == 'completed' || $task->status == 'processing' || $task->status == 'pending_approval') {
            alert()->warning('無法刪除', '已經開始執行的任務無法刪除');
            return back();
        }

        // 包含刪除食安和清檢的缺失專案和採樣
        $task->taskHasDefects()->delete();
        $task->taskHasClearDefects()->delete();
        $task->meals()->detach();
        $task->projects()->detach();
        $task->users()->detach();
        $task->delete();

        alert()->success('刪除成功', '刪除任務成功');

        return redirect()->route('task-assign');
    }

    public function getUnassignedStores(Request $request)
    {
        return response()->json([
            'stores' => Restaurant::where('status', 1)->whereDoesntHave('tasks', function ($query) use ($request) {
                $query->whereYear('task_date', $request->year)->whereMonth('task_date', $request->month);
            })->get(),
            'year' => $request->year,
            'month' => $request->month,
        ]);
    }

    /**
     * 5S和清檢稽核報告內場pdf下載
     */
    public function innerReport(Task $task)
    {
        ini_set('memory_limit', '256M');
        if ($task->category == '食安及5S' || $task->category == '食安及5S複稽') {
            $task->load('taskHasDefects.defect', 'taskHasDefects.user', 'taskHasDefects.restaurantWorkspace');
            // 將所有圖片轉成base64
            $task->taskHasDefects->transform(function ($item) {
                if (!empty($item->images)) {
                    $item->images = collect($item->images)->transform(function ($image) {
                        try {
                            $exif = exif_read_data(storage_path('app/public/' . $image));
                        } catch (\Exception $e) {
                            $exif = [];
                        }


                        // 圖片旋轉
                        if (!empty($exif['Orientation'])) {
                            $image = imagecreatefromjpeg(storage_path('app/public/' . $image));

                            switch ($exif['Orientation']) {
                                case 3:
                                    $image = imagerotate($image, 180, 0);
                                    break;
                                case 6:
                                    $image = imagerotate($image, -90, 0);
                                    break;
                                case 8:
                                    $image = imagerotate($image, 90, 0);
                                    break;
                            }
                            ob_start();
                            // 將圖片輸出到緩衝區
                            imagejpeg($image, null, 50);
                            // 從緩衝區取得圖片資料
                            $image = ob_get_contents();
                            // 清除記憶體
                            ob_end_clean();
                            // 將圖片轉成base64
                            $image = base64_encode($image);
                        } else {
                            // 將圖片轉成base64
                            $image = base64_encode(file_get_contents(storage_path('app/public/' . $image)));
                        }
                        return $image;
                    });
                }
                return $item;
            });

            $task->task_date = Carbon::parse($task->task_date);

            // 任務底下的缺失按照區站kitchen分類
            $defectsGroup = $task->taskHasDefects->where('restaurantWorkspace.area', '!=', '外場')->groupBy('restaurantWorkspace.kitchen');


            // 取得缺失群組底下扣分
            $defectsGroup->transform(function ($defects) {
                $defects->sum = $defects->where('is_ignore', 0)->where('restaurantWorkspace.area', '!=', '外場')->sum('defect.deduct_point');
                return $defects;
            });
            // 缺失群組底下的缺失再依照restaurant_workspace_id分類
            $defectsGroup->transform(function ($defects) {
                $defects->group = $defects->groupBy('restaurantWorkspace.area');
                return $defects;
            });
        } else {
            $task->load('taskHasClearDefects.clearDefect', 'taskHasClearDefects.user', 'taskHasClearDefects.restaurantWorkspace');

            // 將所有圖片轉成base64
            $task->taskHasClearDefects->transform(function ($item) {
                if (!empty($item->images)) {
                    $item->images = collect($item->images)->transform(function ($image) {
                        try {
                            $exif = exif_read_data(storage_path('app/public/' . $image));
                        } catch (\Exception $e) {
                            $exif = [];
                        }


                        // 圖片旋轉
                        if (!empty($exif['Orientation'])) {
                            $image = imagecreatefromjpeg(storage_path('app/public/' . $image));

                            switch ($exif['Orientation']) {
                                case 3:
                                    $image = imagerotate($image, 180, 0);
                                    break;
                                case 6:
                                    $image = imagerotate($image, -90, 0);
                                    break;
                                case 8:
                                    $image = imagerotate($image, 90, 0);
                                    break;
                            }
                            ob_start();
                            // 將圖片輸出到緩衝區
                            imagejpeg($image, null, 50);
                            // 從緩衝區取得圖片資料
                            $image = ob_get_contents();
                            // 清除記憶體
                            ob_end_clean();
                            // 將圖片轉成base64
                            $image = base64_encode($image);
                        } else {
                            // 將圖片轉成base64
                            $image = base64_encode(file_get_contents(storage_path('app/public/' . $image)));
                        }
                        return $image;
                    });
                }
                return $item;
            });

            $task->task_date = Carbon::parse($task->task_date);

            // 任務底下的缺失按照區站kitchen分類
            $defectsGroup = $task->taskHasClearDefects->where('restaurantWorkspace.area', '!=', '外場')->groupBy('restaurantWorkspace.kitchen');

            // 取得缺失群組底下扣分和數量
            $defectsGroup->transform(function ($defects) {
                $defects->sum = $defects->where('is_ignore', 0)->where('restaurantWorkspace.area', '!=', '外場')->sum(function ($item) {
                    return $item->clearDefect->deduct_point * $item->amount;
                });
                $defects->amount = $defects->where('is_ignore', 0)->where('restaurantWorkspace.area', '!=', '外場')->sum('amount');
                return $defects;
            });
            // 缺失群組底下的缺失再依照restaurant_workspace_id分類
            $defectsGroup->transform(function ($defects) {
                $defects->group = $defects->groupBy('restaurantWorkspace.area');
                return $defects;
            });
        }

        $filename = $task->restaurant->brand_code . $task->restaurant->shop . $task->category . '_內場_' . $task->task_date . '.pdf';

        // defectsGroup flat
        $defectsFlat = $defectsGroup->flatten(2);


        if ($task->category == '食安及5S' || $task->category == '食安及5S複稽') {
            $view = \View::make('pdf.5s-inner', compact('task', 'defectsGroup', 'defectsFlat'));
        } else {
            $view = \View::make('pdf.clear-inner', compact('task', 'defectsGroup', 'defectsFlat'));
        }

        $html = $view->render();

        $pdf = new TCPDF();

        $pdf::setFooterCallback(function ($pdf) {
            // 頁數
            $pdf->SetY(-15);
            $pdf->SetFont('msungstdlight', '', 10);
            $pdf->Cell(0, 0, '第' . $pdf->getAliasNumPage() . '頁/共' . $pdf->getAliasNbPages() . '頁', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        });

        $pdf::SetFont('msungstdlight', '', 12);
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false);

        $pdf::Output($filename);
    }

    /**
     * 5S和清檢稽核報告外場pdf下載
     */
    public function outerReport(Task $task)
    {
        if ($task->category == '食安及5S') {
            $task->load('taskHasDefects.defect', 'taskHasDefects.user', 'taskHasDefects.restaurantWorkspace');
            // 只取得外場的缺失
            $defects = $task->taskHasDefects->where('restaurantWorkspace.area', '外場');
            // 將圖片轉成base64
            $defects->transform(function ($item) {
                if (!empty($item->images)) {
                    $item->images = collect($item->images)->transform(function ($image) {
                        try {
                            $exif = exif_read_data(storage_path('app/public/' . $image));
                        } catch (\Exception $e) {
                            $exif = [];
                        }


                        // 圖片旋轉
                        if (!empty($exif['Orientation'])) {
                            $image = imagecreatefromjpeg(storage_path('app/public/' . $image));

                            switch ($exif['Orientation']) {
                                case 3:
                                    $image = imagerotate($image, 180, 0);
                                    break;
                                case 6:
                                    $image = imagerotate($image, -90, 0);
                                    break;
                                case 8:
                                    $image = imagerotate($image, 90, 0);
                                    break;
                            }
                            ob_start();
                            // 將圖片輸出到緩衝區
                            imagejpeg($image, null, 75);
                            // 從緩衝區取得圖片資料
                            $image = ob_get_contents();
                            // 清除記憶體
                            ob_end_clean();
                            // 將圖片轉成base64
                            $image = base64_encode($image);
                        } else {
                            // 將圖片轉成base64
                            $image = base64_encode(file_get_contents(storage_path('app/public/' . $image)));
                        }
                        return $image;
                    });
                }
                return $item;
            });



            $task->task_date = Carbon::parse($task->task_date);
            $defects->sum = $defects->where('is_ignore', 0)->sum('defect.deduct_point');
        } else {
            $task->load('taskHasClearDefects.clearDefect', 'taskHasClearDefects.user', 'taskHasClearDefects.restaurantWorkspace');
            // 只取得外場的缺失
            $defects = $task->taskHasClearDefects->where('restaurantWorkspace.area', '外場');
            // 將圖片轉成base64
            $defects->transform(function ($item) {
                if (!empty($item->images)) {
                    $item->images = collect($item->images)->transform(function ($image) {
                        try {
                            $exif = exif_read_data(storage_path('app/public/' . $image));
                        } catch (\Exception $e) {
                            $exif = [];
                        }


                        // 圖片旋轉
                        if (!empty($exif['Orientation'])) {
                            $image = imagecreatefromjpeg(storage_path('app/public/' . $image));

                            switch ($exif['Orientation']) {
                                case 3:
                                    $image = imagerotate($image, 180, 0);
                                    break;
                                case 6:
                                    $image = imagerotate($image, -90, 0);
                                    break;
                                case 8:
                                    $image = imagerotate($image, 90, 0);
                                    break;
                            }
                            ob_start();
                            // 將圖片輸出到緩衝區
                            imagejpeg($image, null, 75);
                            // 從緩衝區取得圖片資料
                            $image = ob_get_contents();
                            // 清除記憶體
                            ob_end_clean();
                            // 將圖片轉成base64
                            $image = base64_encode($image);
                        } else {
                            // 將圖片轉成base64
                            $image = base64_encode(file_get_contents(storage_path('app/public/' . $image)));
                        }
                        return $image;
                    });
                }
                return $item;
            });

            $task->task_date = Carbon::parse($task->task_date);
            $defects->sum = $defects->where('is_ignore', 0)->sum(function ($item) {
                return $item->clearDefect->deduct_point * $item->amount;
            });
        }

        // 取得缺失總扣分，排除忽略扣分


        $filename = $task->restaurant->brand_code . $task->restaurant->shop . $task->category . '_外場_' . $task->task_date . '.pdf';

        if ($task->category == '食安及5S') {
            $view = \View::make('pdf.5s-outer', compact('task', 'defects'));
        } else {
            $view = \View::make('pdf.clear-outer', compact('task', 'defects'));
        }

        $html = $view->render();

        $pdf = new TCPDF();

        $pdf::setFooterCallback(function ($pdf) {
            // 頁數
            $pdf->SetY(-15);
            $pdf->SetFont('msungstdlight', '', 10);
            $pdf->Cell(0, 0, '第' . $pdf->getAliasNumPage() . '頁/共' . $pdf->getAliasNbPages() . '頁', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        });

        $pdf::SetFont('msungstdlight', '', 12);
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false);

        $pdf::Output($filename);
    }


    public function checkTask(Request $request, Task $task)
    {

        $user_ids = collect($request->users);
        $task_date = Carbon::parse($request->task_date);
        $diff = $user_ids->diff($task->users->pluck('id'));

        $userName = [];

        // 檢查同仁當天有無任務
        foreach ($diff as $user_id) {
            $user = User::find($user_id);

            $count = $user->tasks()->whereDate('task_date', $task_date)->count();
            if ($count > 0) {
                $userName[] = $user->name;
            }
        }

        if (!empty($userName)) {
            return response()->json([
                'status' => 'error',
                'message' => $task_date->format('Y-m-d') . '已經有' . implode('、', $userName) . '的任務',
            ]);
        } else {
            return response()->json([
                'status' => 'success',
            ]);
        }
    }

    /**
     * 從excel匯入任務
     */
    public function import(Request $request)
    {
        if ($request->file('excel') == null) {
            alert()->error('錯誤', '請選擇檔案');
            return back();
        }

        if ($request->file('excel')->getClientOriginalExtension() != 'xlsx') {
            alert()->error('錯誤', '檔案格式錯誤');
            return back();
        }

        try {
            Excel::import(new TaskImport, request()->file('excel'));
            alert()->success('成功', '稽核匯入成功');
            return back();
        } catch (\Exception $e) {
            alert()->error('錯誤', $e->getMessage());
            return back();
        }
    }
}
