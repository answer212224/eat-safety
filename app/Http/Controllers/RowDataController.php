<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Defect;
use App\Models\Restaurant;
use App\Models\ClearDefect;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RowDataController extends Controller
{
    /**
     * rowDataDefect
     */
    public function rowDataDefect(Request $request)
    {

        $yearMonth = $request->input('yearMonth');

        if (!$yearMonth) {
            $yearMonth = today();
        }

        // N+1 問題
        $tasks = Task::query()->with('restaurant.restaurantWorkspaces', 'restaurant.restaurantBackWorkspaces', 'restaurant.restaurantBackWorkspaces', 'taskHasDefects.defect', 'users');

        // yearMonth轉成Carbon格式
        $yearMonth = Carbon::create($yearMonth);

        $tasks = $tasks->whereYear('task_date', $yearMonth)->whereMonth('task_date', $yearMonth);

        // 只取11號的任務
        // $tasks = $tasks->whereDay('task_date', 11);

        // 只取得已完成的任務和食安及5S的缺失
        $tasks = $tasks->where('status', 'completed')->where('category', '食安及5S')->get();

        // 取得最新生效的缺失條文日期
        try {
            $latestDefectDate = Defect::whereYear('effective_date', '<=', $yearMonth)->whereMonth('effective_date', '<=', $yearMonth)->orderBy('effective_date', 'desc')->first()->effective_date;
        } catch (\Exception $e) {
            alert()->error('啟動月份' . $yearMonth->format('Y年m月') . '沒有可用的食安缺失條文');
            return redirect()->back();
        }

        // 轉換成 Carbon 格式
        $latestDefectDate = Carbon::create($latestDefectDate);
        // 取得所有不重複的群組
        $distinctGroups = Defect::getDistinctGroups($latestDefectDate);
        $distinctGroups = $distinctGroups->pluck('group')->toArray();

        // table header
        $tableHeader = [
            '門市',
            '門市串接碼',
            '內場分數',
            '內場主管',
            '外場分數',
            '外場主管',
            '稽核員',
            '稽核員',
            '稽核員',
        ];

        // 合併群組
        $tableHeader = array_merge($tableHeader, $distinctGroups);
        // 廚區1~15
        for ($i = 1; $i <= 15; $i++) {
            $tableHeader[] = '廚區' . $i;
        }
        // 5s區站1~15
        for ($i = 1; $i <= 15; $i++) {
            $tableHeader[] = '5S區站' . $i;
        }
        // 廚區分數1~4
        for ($i = 1; $i <= 5; $i++) {
            $tableHeader[] = '廚區分數' . $i;
        }
        $tableHeader[] = '內場5S總';
        $tableHeader[] = '外場5S總';
        $tableHeader[] = '閉店缺失';
        $tableHeader[] = '內場閉店缺失';
        $tableHeader[] = '外場閉店缺失總數';
        $tableHeader[] = '外場閉店缺失';
        $tableHeader[] = '內場重大缺失';
        $tableHeader[] = '外場重大缺失';
        $tableHeader[] = '內場專案查核';
        $tableHeader[] = '外場專案查核';
        $tableHeader[] = '內場專案結果';
        $tableHeader[] = '外場專案結果';


        $tablebodys = [];

        foreach ($tasks as $task) {

            // 將$task->task_date轉成Carbon格式 取月份
            $taskMonth = Carbon::create($task->task_date)->format('n月');
            // 計算該任務底下餐廳工作區是內場的分數
            $backTask = $task->taskHasDefects->whereIn('restaurant_workspace_id', $task->restaurant->restaurantBackWorkspaces->pluck('id'))->load('defect');
            $backScore = $backTask->sum(function ($item) {
                // 只計算需要扣分的缺失
                if (!$item->is_ignore) {
                    return $item->defect->deduct_point;
                }
            });

            // 計算該任務底下餐廳工作區是外場的分數
            $frontTask = $task->taskHasDefects->where('restaurant_workspace_id', $task->restaurant->restaurantFrontWorkspace->id)->load('defect');
            $frontScore = $frontTask->sum(function ($item) {
                // 只計算需要扣分的缺失
                if (!$item->is_ignore) {
                    return $item->defect->deduct_point;
                }
            });

            // 計算distinctGroups缺失數量
            $defectGroupsCount = $task->taskHasDefects->load('defect')->groupBy('defect.group')->map(function ($item) {
                return $item->count();
            });

            // 依照$distinctGroups順序取得缺失數量，沒有的話補
            $distinctGroupsCount = collect($distinctGroups)->map(function ($item) use ($defectGroupsCount) {
                return $defectGroupsCount[$item] ?? 0;
            });

            // 將$defectGroupsCount轉成array
            $distinctGroupsCount = $distinctGroupsCount->toArray();

            // 取得內場區域(area不是廚務部和外場)
            $restaurantBackWorkspaces = $task->restaurant->restaurantBackWorkspaces;

            $backArea = $restaurantBackWorkspaces->pluck('area');

            // 不是5S的缺失根據 restaurant.area分類
            $backTaskNot5S = $backTask->whereNotIn('defect.category', ['5S'])->groupBy('restaurantWorkspace.area')->map(function ($item) {
                return $item->count();
            });

            // 依照backArea順序將backTaskNot5S數量取出，沒有的話補0
            $backTaskNot5S = collect($backArea)->map(function ($item) use ($backTaskNot5S) {
                return [
                    'count' => $backTaskNot5S[$item] ?? 0,
                    'area' => $item
                ];
            });

            // backTaskNot5S補滿14個 不夠的補0
            $backTaskNot5S = $backTaskNot5S->pad(14, 0);

            // 外場不是5S的缺失count
            $frontTaskNot5S = [
                'area' => '外場',
                'count' => $frontTask->whereNotIn('defect.category', ['5S'])->count()
            ];

            // 是5S的缺失根據 restaurant.area分類
            $backTask5S = $backTask->whereIn('defect.category', ['5S'])->groupBy('restaurantWorkspace.area')->map(function ($item) {
                return $item->count();
            });

            // 計算內場5S總數
            $backTask5STotal = $backTask->whereIn('defect.category', ['5S'])->count();

            // 依照backArea順序將backTask5S數量取出，沒有的話補0
            $backTask5S = collect($backArea)->map(function ($item) use ($backTask5S) {
                return [
                    'count' => $backTask5S[$item] ?? 0,
                    'area' => $item
                ];
            });

            // backTask5S補滿14個 不夠的補0
            $backTask5S = $backTask5S->pad(14, 0);

            // 計算外場5S總數
            $frontTask5STotal = $frontTask->whereIn('defect.category', ['5S'])->count();

            // 外場是5S的缺失count
            $frontTask5S = [
                'area' => '外場',
                'count' => $frontTask5STotal
            ];

            // 取得中廚區站的id
            $restaurantChineseKitchenWorkspaces = $task->restaurant->restaurantChineseKitchenWorkspaces->pluck('id');
            // 取得西廚區站的id
            $restaurantWesternKitchenWorkspaces = $task->restaurant->restaurantWesternKitchenWorkspaces->pluck('id');
            // 取得日廚區站的id
            $restaurantJapaneseKitchenWorkspaces = $task->restaurant->restaurantJapaneseKitchenWorkspaces->pluck('id');
            // 取得西點區站的id
            $restaurantPastryKitchenWorkspace = optional($task->restaurant->restaurantPastryKitchenWorkspace)->id;
            // 取得未定區站的id
            $restaurantUndecidedKitchenWorkspace = optional($task->restaurant->restaurantUndecidedKitchenWorkspace)->id;

            // 判斷是否有中廚區站
            if ($restaurantChineseKitchenWorkspaces->isEmpty()) {
                $backTaskChineseKitchen = null;
            } else {
                // 計算中廚區站的總分
                $backTaskChineseKitchen = $backTask->whereIn('restaurant_workspace_id', $restaurantChineseKitchenWorkspaces)->sum(function ($item) {
                    // 只計算需要扣分的缺失
                    if (!$item->is_ignore) {
                        return $item->defect->deduct_point;
                    }
                });
            }

            // 判斷是否有西廚區站
            if ($restaurantWesternKitchenWorkspaces->isEmpty()) {
                $backTaskWesternKitchen = null;
            } else {
                // 計算西廚區站的總分
                $backTaskWesternKitchen = $backTask->whereIn('restaurant_workspace_id', $restaurantWesternKitchenWorkspaces)->sum(function ($item) {
                    // 只計算需要扣分的缺失
                    if (!$item->is_ignore) {
                        return $item->defect->deduct_point;
                    }
                });
            }

            // 判斷是否有日廚區站
            if ($restaurantJapaneseKitchenWorkspaces->isEmpty()) {
                $backTaskJapaneseKitchen = null;
            } else {
                // 計算日廚區站的總分
                $backTaskJapaneseKitchen = $backTask->whereIn('restaurant_workspace_id', $restaurantJapaneseKitchenWorkspaces)->sum(function ($item) {
                    // 只計算需要扣分的缺失
                    if (!$item->is_ignore) {
                        return $item->defect->deduct_point;
                    }
                });
            }

            // 判斷是否有西點區站
            if (!$restaurantPastryKitchenWorkspace) {
                $backTaskPastryKitchen = null;
            } else {
                // 計算西點區站的總分
                $backTaskPastryKitchen = $backTask->where('restaurant_workspace_id', $restaurantPastryKitchenWorkspace)->sum(function ($item) {
                    // 只計算需要扣分的缺失
                    if (!$item->is_ignore) {
                        return $item->defect->deduct_point;
                    }
                });
            }

            // 判斷是否有未定區站
            if (!$restaurantUndecidedKitchenWorkspace) {
                $backTaskUndecidedKitchen = null;
            } else {
                // 計算未定區站的總分
                $backTaskUndecidedKitchen = $backTask->where('restaurant_workspace_id', $restaurantUndecidedKitchenWorkspace)->sum(function ($item) {
                    // 只計算需要扣分的缺失
                    if (!$item->is_ignore) {
                        return $item->defect->deduct_point;
                    }
                });
            }

            $tableBody = [
                'restaurant_name' => $taskMonth . $task->restaurant->brand_code . $task->restaurant->shop,
                'restaurant_code' => $taskMonth . $task->restaurant->sid,
                'back_score' => 100 + $backScore,
                'back_manager' => $task->inner_manager,
                'front_score' => 100 + $frontScore,
                'front_manager' => $task->outer_manager,
                'auditor' => $task->users->first()->name,
                'auditor_2' => optional($task->users->skip(1)->first())->name,
                'auditor_3' => optional($task->users->skip(2)->first())->name,
                'distinctGroupsCount' => $distinctGroupsCount,
                'backTaskNot5S' => $backTaskNot5S->toArray(),
                'frontTaskNot5S' => $frontTaskNot5S,
                'backTask5S' => $backTask5S->toArray(),
                'frontTask5S' => $frontTask5S,
                'backTaskChineseKitchen' => $backTaskChineseKitchen,
                'backTaskWesternKitchen' => $backTaskWesternKitchen,
                'backTaskJapaneseKitchen' => $backTaskJapaneseKitchen,
                'backTaskPastryKitchen' => $backTaskPastryKitchen,
                'backTaskUndecidedKitchen' => $backTaskUndecidedKitchen,
                'backTask5STotal' =>  $backTask5STotal,
                'backTask5STotal' => $backTask5STotal,
                'frontTask5STotal' => $frontTask5STotal,
                'h' => '確認中',
                'i' => '確認中',
                'j' => '確認中',
                'k' => '確認中',
                'l' => '確認中',
                'm' => '確認中',
                'n' => '確認中',
                'o' => '確認中',
                'p' => '確認中',
                'q' => '確認中',
            ];

            $tablebodys[] = $tableBody;
        }

        return view('backend.row-data.index', [
            'title' => '食安缺失RowData',
            'yearMonth' => $yearMonth,
            'tableHeader' => $tableHeader,
            'tableBodys' => $tablebodys,
        ]);
    }

    /**
     * rowDataClearDefect
     */
    public function rowDataClearDefect(Request $request)
    {
        $yearMonth = $request->input('yearMonth');

        if (!$yearMonth) {
            $yearMonth = today();
        }

        // N+1 問題
        $tasks = Task::query()->with('restaurant.restaurantWorkspaces', 'restaurant.restaurantBackWorkspaces', 'restaurant.restaurantBackWorkspaces', 'taskHasClearDefects');

        // yearMonth轉成Carbon格式
        $yearMonth = Carbon::create($yearMonth);

        $tasks = $tasks->whereYear('task_date', $yearMonth)->whereMonth('task_date', $yearMonth);

        // 只取得已完成的任務和清潔檢查的缺失
        $tasks = $tasks->where('status', 'completed')->where('category', '清潔檢查')->get();

        // 取得最新生效的缺失條文日期
        try {
            $latestDefectDate = ClearDefect::whereYear('effective_date', '<=', $yearMonth)->whereMonth('effective_date', '<=', $yearMonth)->orderBy('effective_date', 'desc')->first()->effective_date;
        } catch (\Exception $e) {
            alert()->error('啟動月份' . $yearMonth->format('Y年m月') . '沒有可用的清潔檢查缺失條文');
            return redirect()->back();
        }

        // 轉換成 Carbon 格式
        $latestDefectDate = Carbon::create($latestDefectDate);

        // table header
        $tableHeader = [
            '門市',
            '分數',
        ];

        for ($i = 1; $i <= 15; $i++) {
            $tableHeader[] = '廚區' . $i;
        }

        $tablebodys = [];

        foreach ($tasks as $task) {
            // 將$task->task_date轉成Carbon格式 取年月份
            $taskMonth = Carbon::create($task->task_date)->format('Y年n月');
            // 計算分數
            $score = $task->taskHasClearDefects->sum(function ($item) {
                // 只計算需要扣分的缺失
                if (!$item->is_ignore) {
                    return $item->amount * -2;
                }
            });
            $score = 100 + $score;

            // 取得內場各區站
            $restaurantBackWorkspaces = $task->restaurant->restaurantBackWorkspaces;
            $backArea = $restaurantBackWorkspaces->pluck('area');
            $backAreaId = $restaurantBackWorkspaces->pluck('id');

            // 取得內場taskHasClearDefects
            $backTask = $task->taskHasClearDefects->whereIn('restaurant_workspace_id', $backAreaId->toArray())->load('restaurantWorkspace');

            // 計算各區站數量
            $backTask = $backTask->groupBy('restaurantWorkspace.area')->map(function ($item) {
                return $item->sum('amount');
            });

            // 依照backArea順序將backTask數量取出，沒有的話補0
            $backTask = collect($backArea)->map(function ($item) use ($backTask) {
                return [
                    'count' => $backTask[$item] ?? 0,
                    'area' => $item
                ];
            });

            // backTask補滿14個 不夠的補0
            $backTask = $backTask->pad(14, 0);

            // 取得外場
            $frontTask = $task->taskHasClearDefects->where('restaurant_workspace_id', $task->restaurant->restaurantFrontWorkspace->id)->load('restaurantWorkspace');
            $frontTask = [
                'area' => '外場',
                'count' => $frontTask->sum('amount')
            ];

            $tableBody = [
                'restaurant' => $taskMonth . $task->restaurant->sid,
                'score' => $score,
                'backTask' => $backTask->toArray(),
                'frontTask' => $frontTask,

            ];

            $tablebodys[] = $tableBody;
        }

        return view('backend.row-data.clear-defect', [
            'title' => '清潔檢查缺失RowData',
            'yearMonth' => $yearMonth,
            'tableHeader' => $tableHeader,
            'tableBodys' => $tablebodys,
        ]);
    }
}
