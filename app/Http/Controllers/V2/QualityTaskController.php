<?php

namespace App\Http\Controllers\V2;

use Carbon\Carbon;
use App\Models\QualityTask;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\QualityTaskHasQualityDefect;
use Intervention\Image\Exception\NotReadableException;
use Sopamo\LaravelFilepond\Exceptions\InvalidPathException;
use Elibyy\TCPDF\Facades\TCPDF;

class QualityTaskController extends Controller
{
    // 任務頁面
    public function index()
    {
        return view('v2.app.quality.tasks.index', [
            'title' => '任務',
        ]);
    }

    // 行事曆頁面
    public function calendar()
    {
        return view('v2.app.quality.tasks.calendar', [
            'title' => '行事曆',
        ]);
    }

    // 新增食安缺失頁面
    public function createDefect(QualityTask $task)
    {
        // 如果已經有開始時間就不更新 一進頁面更新任務開始時間
        if (!$task->start_at) {
            $task->update([
                'start_at' => now(),
            ]);
        }
        return view('v2.app.quality.tasks.create-defect', [
            'task' => $task,
            'title' => '新增食安缺失',
        ]);
    }

    // 新增清檢缺失頁面
    public function createClearDefect(QualityTask $task)
    {
        // 如果已經有開始時間就不更新 一進頁面更新任務開始時間
        if (!$task->start_at) {
            $task->update([
                'start_at' => now(),
            ]);
        }
        return view('v2.app.quality.tasks.create-clear-defect', [
            'task' => $task,
            'title' => '新增清檢缺失',
        ]);
    }

    // 編輯食安缺失頁面
    public function editDefect(QualityTask $task)
    {
        return view('v2.app.quality.tasks.edit-defect', [
            'task' => $task,
            'title' => '食安稽核紀錄',
        ]);
    }

    // 編輯清檢缺失頁面
    public function editClearDefect(QualityTask $task)
    {
        return view('v2.app.quality.tasks.edit-clear-defect', [
            'task' => $task,
            'title' => '清潔稽核紀錄',
        ]);
    }

    // 新增食安缺失
    public function storeDefect(Request $request, QualityTask $task)
    {
        try {
            $images = [];
            $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);

            foreach ($request->filepond as $file) {

                $filepondPath = $filepond->getPathFromServerId($file);

                if (!Storage::disk('public')->exists($filepondPath)) {
                    Log::critical('圖片不存在' . ' ' . $filepondPath);
                    alert()->error('錯誤', '圖片不存在');
                    return back();
                }

                $originalImagePath = public_path('storage/' . $filepondPath);

                $image = Image::make($originalImagePath);
                // 修正圖片方向
                $image->orientate();
                // 壓縮圖片
                $image->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $fileName = Str::random(3) . '_' . $task->id . '_' . now()->format('Ymdhis') . '.jpg';

                $filePath = storage_path("app/public/uploads/" . $fileName);

                $image->save($filePath, 60);

                $images[] = "uploads/$fileName";

                // 刪除暫存圖片
                // Storage::disk('public')->delete($filepondPath);
            }
        } catch (InvalidPathException $e) {
            Log::critical($e->getMessage());
            alert()->error('錯誤', $e->getMessage());
            return back();
        } catch (NotReadableException $e) {
            Log::critical($e->getMessage());
            alert()->error('錯誤', $e->getMessage());
            return back();
        } catch (\Exception $e) {
            Log::critical($e->getMessage());
            alert()->error('錯誤', $e->getMessage());
            return back();
        }

        $task->update([
            'status' => 'processing',
        ]);

        // 檢查是否為重複缺失
        $isRepeat = QualityTaskHasQualityDefect::where('quality_task_id', $task->id)
            ->where('quality_defect_id', $request->defect_id)
            ->where('restaurant_workspace_id', $request->workspace)
            ->first();

        $task->taskHasDefects()->create([
            'user_id' => auth()->user()->id,
            'quality_defect_id' => $request->defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'images' => $images,
            'is_ignore' => $request->is_ignore ? 1 : 0,
            'is_not_reach_deduct_standard' => $request->is_not_reach_deduct_standard ? 1 : 0,
            'is_suggestion' => $request->is_suggestion ? 1 : 0,
            'is_repeat' => $isRepeat ? 1 : 0,
            'memo' => $request->memo,
        ]);

        if ($isRepeat) {
            alert()->success('成功', '重複缺失已新增');
        } else {
            alert()->success('成功', '缺失已新增');
        }

        return back();
    }

    // 新增清檢缺失
    public function storeClearDefect(Request $request, QualityTask $task)
    {
        try {
            $images = [];
            $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);

            foreach ($request->filepond as $file) {

                $filepondPath = $filepond->getPathFromServerId($file);

                if (!Storage::disk('public')->exists($filepondPath)) {
                    Log::critical('圖片不存在' . ' ' . $filepondPath);
                    alert()->error('錯誤', '圖片不存在');
                    return back();
                }

                $originalImagePath = public_path('storage/' . $filepondPath);


                $image = Image::make($originalImagePath);
                // 修正圖片方向
                $image->orientate();
                // 壓縮圖片
                $image->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $fileName = Str::random(3) . '_' . $task->id . '_' . now()->format('Ymdhis') . '.jpg';

                $filePath = storage_path("app/public/uploads/" . $fileName);

                $image->save($filePath, 60);

                $images[] = "uploads/$fileName";

                // 刪除暫存圖片
                // Storage::disk('public')->delete($filepondPath);
            }
        } catch (InvalidPathException $e) {
            Log::critical($e->getMessage());
            alert()->error('錯誤', $e->getMessage());
            return back();
        } catch (NotReadableException $e) {
            Log::critical($e->getMessage());
            alert()->error('錯誤', $e->getMessage());
            return back();
        } catch (\Exception $e) {
            Log::critical($e->getMessage());
            alert()->error('錯誤', $e->getMessage());
            return back();
        }

        // 更新任務狀態
        $task->update([
            'status' => 'processing',
        ]);

        // 新增清潔檢查缺失
        $task->taskHasClearDefects()->create([
            'user_id' => auth()->user()->id,
            'quality_clear_defect_id' => $request->clear_defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'images' => $images,
            'description' => $request->description,
            'is_ignore' => $request->is_ignore ? 1 : 0,
            'amount' => $request->demo3_21,
            'memo' => $request->memo,
            'is_not_reach_deduct_standard' => $request->is_not_reach_deduct_standard ? 1 : 0,
            'is_suggestion' => $request->is_suggestion ? 1 : 0,
        ]);

        alert()->success('成功', '缺失已新增');
        return back();
    }

    // qualityReport
    public function qualityReport(QualityTask $task)
    {
        ini_set('memory_limit', '256M');
        if ($task->category == '食安巡檢') {
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

            // 依照站台分類
            $defectsGroup = $task->taskHasDefects->groupBy('restaurant_workspace_id');
            // 再依照缺失分類
            $defectsGroup = $defectsGroup->map(function ($item, $key) {
                return $item->groupBy('defect.id');
            });

            // 任務底下的缺失按照區站kitchen分類
            $defectsGroup = $task->taskHasDefects
                ->where('restaurantWorkspace.area', '!=', '外場')
                ->groupBy('restaurantWorkspace.kitchen');

            // 取得缺失群組底下扣分 is_ignore = 0 ,is_not_reach_deduct_standard=0, is_suggestion=0, is_repeat=0
            $defectsGroup->transform(function ($defects) {
                $defects->sum = $defects->where('is_ignore', 0)
                    ->where('is_not_reach_deduct_standard', 0)
                    ->where('is_suggestion', 0)
                    ->where('is_repeat', 0)
                    ->where('restaurantWorkspace.area', '!=', '外場')
                    ->sum(function ($item) {
                        return $item->defect->deduct_point;
                    });
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

            // 取得缺失群組底下扣分和數量 排除is_ignore = 1 和 is_not_reach_deduct_standard = 1 和 is_suggestion = 1
            $defectsGroup->transform(function ($defects) {
                $defects->sum = $defects->where('is_ignore', 0)
                    ->where('is_not_reach_deduct_standard', 0)
                    ->where('is_suggestion', 0)
                    ->where('restaurantWorkspace.area', '!=', '外場')
                    ->sum(function ($item) {
                        return $item->clearDefect->deduct_point * $item->amount;
                    });
                $defects->amount = $defects->where('is_ignore', 0)
                    ->where('is_not_reach_deduct_standard', 0)
                    ->where('is_suggestion', 0)
                    ->where('restaurantWorkspace.area', '!=', '外場')
                    ->sum('amount');
                return $defects;
            });
            // 缺失群組底下的缺失再依照restaurant_workspace_id分類
            $defectsGroup->transform(function ($defects) {
                $defects->group = $defects->groupBy('restaurantWorkspace.area');
                return $defects;
            });
        }

        $filename = $task->restaurant->brand_code . $task->restaurant->shop . $task->category . $task->task_date . '.pdf';

        // defectsGroup flat
        $defectsFlat = $defectsGroup->flatten(2);
        // 重新排序 defectsFlat.defect.group = 重大缺失 排第一個, is_suggestion = 1 和 is_repeat = 1 和 is_not_reach_deduct_standard = 1 和 is_ignore = 1 排最後
        $defectsFlat = $defectsFlat->sortBy(function ($item) {
            if ($item->defect && $item->defect->group == '重大缺失') {
                return 1;
            } elseif ($item->is_suggestion == 1 || $item->is_repeat == 1 || $item->is_not_reach_deduct_standard == 1 || $item->is_ignore == 1) {
                return 3;
            } else {
                return 2;
            }
        });

        if ($task->category == '食安巡檢') {
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
}
