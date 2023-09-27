<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('backend.restaurants.index', [
            'title' => '門市資料庫',
            'restaurants' => Restaurant::all(),
        ]);
    }

    public function create()
    {
        return view('backend.restaurants.create', [
            'title' => '新增門市',
        ]);
    }

    public function edit(Restaurant $restaurant)
    {
        return view('backend.restaurants.edit', [
            'title' => '編輯餐廳',
            'restaurant' => $restaurant,
        ]);
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $restaurant->update($request->all());

        return redirect()->route('restaurant-index');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurant-index');
    }

    public function show(Restaurant $restaurant)
    {
        return view('backend.restaurants.show', [
            'title' => '工作區資料',
            'restaurant' => $restaurant,
        ]);
    }

    public function workspaceStore(Request $request, Restaurant $restaurant)
    {

        $restaurant->restaurantWorkspaces()->create($request->all());
        alert()->success('新增成功', '新增工作區成功');
        return back();
    }

    /**
     * 取得分店的今年度的缺失數量
     */
    public function chart(Restaurant $restaurant)
    {
        $restaurant->load('restaurantBackWorkspaces.taskHasDefects', 'restaurantBackWorkspaces.taskHasDefectsNotIgnore.defect', 'restaurantFrontWorkspace.taskHasDefectsNotIgnore.defect');

        // 內場的每個年月缺失數量
        $backDefectsCount = $restaurant->restaurantBackWorkspaces->pluck('taskHasDefects')->flatten()->groupBy(function ($defect) {
            return $defect->created_at->format('Y-m');
        })->map(function ($defects) {
            return $defects->count();
        });

        // 外場的每個年月缺失數量
        $frontDefectsCount = $restaurant->restaurantFrontWorkspace->taskHasDefectsNotIgnore->groupBy(function ($defect) {
            return $defect->created_at->format('Y-m');
        })->map(function ($defects) {
            return $defects->count();
        });

        // 比對兩組資料，如果有缺失的月份，就補0
        $backDefectsCount->each(function ($value, $key) use ($frontDefectsCount) {
            if (!$frontDefectsCount->has($key)) {
                $frontDefectsCount->put($key, 0);
            }
        });

        $frontDefectsCount->each(function ($value, $key) use ($backDefectsCount) {
            if (!$backDefectsCount->has($key)) {
                $backDefectsCount->put($key, 0);
            }
        });

        // 內場的缺失扣分每個年月分組的平均
        $backYearMonthDateDeductPoints = $restaurant->restaurantBackWorkspaces->pluck('taskHasDefectsNotIgnore')->flatten()->groupBy(function ($defect) {
            return $defect->created_at->format('Y-m-d');
        })->map(function ($defects) {
            return 100 + ($defects->sum('defect.deduct_point'));
        });
        // 再根據年月分組，取得每個月的平均
        $backYearMonthDateDeductPoints = $backYearMonthDateDeductPoints->groupBy(function ($defect, $key) {
            return Carbon::create($key)->format('Y-m');
        })->map(function ($defects) {
            return $defects->avg();
        });

        // 外場的缺失扣分每個年月分組的平均
        $frontYearMonthDateDeductPoints = $restaurant->restaurantFrontWorkspace->taskHasDefectsNotIgnore->groupBy(function ($defect) {
            return $defect->created_at->format('Y-m-d');
        })->map(function ($defects) {
            return 100 + ($defects->sum('defect.deduct_point'));
        });
        // 再根據年月分組，取得每個月的平均
        $frontYearMonthDateDeductPoints = $frontYearMonthDateDeductPoints->groupBy(function ($defect, $key) {
            return Carbon::create($key)->format('Y-m');
        })->map(function ($defects) {
            return $defects->avg();
        });

        // 比對兩組資料，如果有缺失的月份，就補100
        $backYearMonthDateDeductPoints->each(function ($value, $key) use ($frontYearMonthDateDeductPoints) {
            if (!$frontYearMonthDateDeductPoints->has($key)) {
                $frontYearMonthDateDeductPoints->put($key, 100);
            }
        });
        $frontYearMonthDateDeductPoints->each(function ($value, $key) use ($backYearMonthDateDeductPoints) {
            if (!$backYearMonthDateDeductPoints->has($key)) {
                $backYearMonthDateDeductPoints->put($key, 100);
            }
        });

        // 根據key排序
        $backYearMonthDateDeductPoints = $backYearMonthDateDeductPoints->sortBy(function ($defect, $key) {
            return $key;
        });
        $backDefectsCount = $backDefectsCount->sortBy(function ($defect, $key) {
            return $key;
        });

        // 根據key排序
        $frontYearMonthDateDeductPoints = $frontYearMonthDateDeductPoints->sortBy(function ($defect, $key) {
            return $key;
        });
        $frontDefectsCount = $frontDefectsCount->sortBy(function ($defect, $key) {
            return $key;
        });

        return view('backend.restaurants.chart', [
            'title' => $restaurant->brand . $restaurant->shop,
            'restaurant' => $restaurant,
            'backDefectsCount' => $backDefectsCount,
            'frontDefectsCount' => $frontDefectsCount,
            'backYearMonthDateDeductPoints' => $backYearMonthDateDeductPoints,
            'frontYearMonthDateDeductPoints' => $frontYearMonthDateDeductPoints,
        ]);
    }

    /**
     * restaurant-defect
     */
    public function defects(Restaurant $restaurant, Request $request)
    {
        $restaurant->load('restaurantWorkspaces', 'restaurantWorkspaces.taskHasDefects');

        $yearMonth = Carbon::create($request->yearMonth);

        // 取得該月份的所有資料
        $restaurant->restaurantWorkspaces->each(function ($workspace) use ($yearMonth) {
            $workspace->taskHasDefects = $workspace->taskHasDefects->filter(function ($defect) use ($yearMonth) {
                return $defect->created_at->year == $yearMonth->year && $defect->created_at->month == $yearMonth->month;
            });
        });

        return view('backend.restaurants.defects', [
            'title' => '分店食安缺失資料',
            'restaurant' => $restaurant,
        ]);
    }

    /**
     * 分店的清檢缺失
     * restaurant-clear-defects
     */
    public function clearDefects(Restaurant $restaurant, Request $request)
    {
        $restaurant->load('restaurantWorkspaces', 'restaurantWorkspaces.taskHasClearDefects');

        $yearMonth = Carbon::create($request->yearMonth);

        // 取得該月份的所有資料
        $restaurant->restaurantWorkspaces->each(function ($workspace) use ($yearMonth) {
            $workspace->taskHasClearDefects = $workspace->taskHasClearDefects->filter(function ($defect) use ($yearMonth) {
                return $defect->created_at->year == $yearMonth->year && $defect->created_at->month == $yearMonth->month;
            });
        });

        return view('backend.restaurants.clear-defects', [
            'title' => '分店清潔缺失資料',
            'restaurant' => $restaurant,
        ]);
    }

    /**
     * 門市缺失資料
     * records
     */
    public function records(Request $request)
    {
        $restaurantIds = $request->input('restaurants', []);
        // 取得任務是篩選的門市
        $restaurants = Restaurant::whereIn('id', $restaurantIds)->get();

        //    restaurants groupBy brand 給前端顯示
        $restaurants = Restaurant::all()->groupBy('brand');

        return view('backend.restaurants.records', [
            'title' => '門市缺失資料',
            'restaurants' => $restaurants,

        ]);
    }
}
