<?php

namespace App\Http\Controllers;


use App\Models\Task;
use App\Models\Defect;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RowDataController extends Controller
{
    /**
     * rowDataPreview
     */
    public function rowDataPreview(Request $request)
    {
        $dateRange = $request->input('date-range');
        // N+1 問題
        $tasks = Task::query()->with('restaurant.restaurantWorkspaces', 'restaurant.restaurantBackWorkspaces', 'restaurant.restaurantBackWorkspaces', 'taskHasDefects.defect', 'users');

        // 假設有選擇日期區間
        if ($dateRange) {

            $range = explode(' 至 ', $dateRange);

            if (count($range) == 2) {
                $dateStart = $range[0];
                $dateEnd = $range[1];
            } else {
                $dateStart = $range[0];
                $dateEnd = $range[0];
            }
            // dateEnd +1 day
            $dateEnd = date('Y-m-d', strtotime($dateEnd . ' +1 day'));
            $tasks = Task::whereBetween('task_date', [$dateStart, $dateEnd]);
        }
        // 只取得已完成的任務
        $tasks = $tasks->where('status', 'completed')->where('category', '食安及5S')->get();

        // 取得最新生效的缺失條文日期
        $latestDefectDate = Defect::whereYear('effective_date', '<=', today())->whereMonth('effective_date', '<=', today())->orderBy('effective_date', 'desc')->first()->effective_date;
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

            // 依照backArea順序將backTask5S數量取出，沒有的話補0
            $backTask5S = collect($backArea)->map(function ($item) use ($backTask5S) {
                return [
                    'count' => $backTask5S[$item] ?? 0,
                    'area' => $item
                ];
            });

            // backTask5S補滿14個 不夠的補0
            $backTask5S = $backTask5S->pad(14, 0);

            // 外場是5S的缺失count
            $frontTask5S = [
                'area' => '外場',
                'count' => $frontTask->whereIn('defect.category', ['5S'])->count()
            ];


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
            ];

            $tablebodys[] = $tableBody;
        }

        return view('backend.row-data.index', [
            'title' => 'Row Data Preview',
            'dateRange' => $dateRange,
            'tableHeader' => $tableHeader,
            'tableBodys' => $tablebodys,
        ]);
    }
}
