<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\RestaurantWorkspace;

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

    // storeWorkspace
    public function storeWorkspace(Request $request, Restaurant $restaurant)
    {

        $restaurant->restaurantWorkspaces()->create($request->all());

        alert()->success('新增成功', '新增工作區成功');

        return back();
    }

    // updateWorkspace
    public function updateWorkspace(Request $request)
    {
        $workspace_id = $request->input('workspace_id');
        $area = $request->input('area');


        $workspace = RestaurantWorkspace::find($workspace_id);

        $workspace->area = $area;

        $workspace->save();

        alert()->success('更新成功', '更新區站名稱為' . $area . '成功');

        return back();
    }

    // 更新門市區站的狀態 ajax
    public function updateWorkspaceStatus(Request $request)
    {
        $workspace_id = $request->input('workspace_id');
        $status = $request->input('status');

        $workspace = RestaurantWorkspace::find($workspace_id);

        $workspace->status = $status == 'true' ? 1 : 0;

        $workspace->save();

        return response()->json([
            'status' => 'success',
            'message' => '更新成功',
        ]);
    }

    // sortWorkspace
    public function sortWorkspace(Request $request)
    {
        $workspace_id = $request->input('workspace_id');

        $workspace = RestaurantWorkspace::find($workspace_id);

        $workspace->sort = $request->input('sort');

        $workspace->save();

        return response()->json([
            'status' => 'success',
            'message' => '更新成功',
        ]);
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
     * 食安圖表
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
     * 清檢圖表 不用分前後場
     */
    public function clearChart(Restaurant $restaurant)
    {
        $restaurant->load('restaurantWorkspaces.taskHasClearDefects', 'restaurantWorkspaces.taskHasClearDefectsNotIgnore');

        // 每個年月缺失數量
        $defectsCount = $restaurant->restaurantWorkspaces->pluck('taskHasClearDefects')->flatten()->groupBy(function ($defect) {
            return $defect->created_at->format('Y-m');
        })->map(function ($defects) {
            return $defects->count();
        });

        // 用key排序
        $defectsCount = $defectsCount->sortBy(function ($defect, $key) {
            return $key;
        });

        // 每個年月分組的平均
        $yearMonthDateDeductPoints = $restaurant->restaurantWorkspaces->pluck('taskHasClearDefectsNotIgnore')->flatten()->groupBy(function ($defect) {
            return $defect->created_at->format('Y-m-d');
        })->map(function ($defects) {
            return 100 + ($defects->sum('amount') * -2);
        });

        // 再根據年月分組，取得每個月的平均
        $yearMonthDateDeductPoints = $yearMonthDateDeductPoints->groupBy(function ($defect, $key) {
            return Carbon::create($key)->format('Y-m');
        })->map(function ($defects) {
            return $defects->avg();
        });

        // 用key排序
        $yearMonthDateDeductPoints = $yearMonthDateDeductPoints->sortBy(function ($defect, $key) {
            return $key;
        });

        return view('backend.restaurants.clear-chart', [
            'title' => $restaurant->brand . $restaurant->shop,
            'restaurant' => $restaurant,
            'defectsCount' => $defectsCount,
            'yearMonthDateDeductPoints' => $yearMonthDateDeductPoints,
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

    /**
     * 集團status = 1門市的食安缺失數量和清檢缺失數量
     * eatogether
     */
    public function eatogether(Request $request)
    {
        $yearMonth = $request->yearMonth ? Carbon::create($request->yearMonth) : Carbon::now();
        $selectBrands = $request->selectBrands ? $request->selectBrands : [];

        $restaurants = Restaurant::where('status', 1)->get();

        $brands = $restaurants->pluck('brand');

        if (count($selectBrands) > 0) {
            $restaurants = $restaurants->whereIn('brand', $selectBrands);
        }

        $restaurants->load(['restaurantWorkspaces.taskHasDefects' => function ($query) use ($yearMonth) {
            $query->whereYear('created_at', $yearMonth->year)->whereMonth('created_at', $yearMonth->month)
                // is_ignore = 1 ,is_not_reach_deduct_standard = 1, is_suggestion = 1, is_repeat=1
                ->where('is_ignore', 0)->where('is_not_reach_deduct_standard', 0)->where('is_suggestion', 0)->where('is_repeat', 0);
        }, 'restaurantWorkspaces.taskHasClearDefects' => function ($query) use ($yearMonth) {
            $query->whereYear('created_at', $yearMonth->year)->whereMonth('created_at', $yearMonth->month)
                // is_ignore = 1 ,is_not_reach_deduct_standard = 1, is_suggestion = 1
                ->where('is_ignore', 0)->where('is_not_reach_deduct_standard', 0)->where('is_suggestion', 0);
        }]);

        // 計算各門市的食安缺失數量 key = 門市brand+shop
        $defectsCount = $restaurants->map(function ($restaurant, $key) {
            $count = $restaurant->restaurantWorkspaces->pluck('taskHasDefects')->flatten()->count();
            return [
                'name' => $restaurant->brand . $restaurant->shop,
                'count' => $count,
            ];
        });

        // 計算各門市的清檢缺失數量 key = 門市brand+shop
        $clearDefectsCount = $restaurants->map(function ($restaurant, $key) {
            $count = $restaurant->restaurantWorkspaces->pluck('taskHasClearDefects')->flatten()->count();
            return [
                'name' => $restaurant->brand . $restaurant->shop,
                'count' => $count,
            ];
        });

        $yearMonth = $yearMonth->format('Y-m');

        return view('backend.eatogether.restaurants', [
            'title' => '集團全部門市統計',
            'defectsCount' => $defectsCount,
            'clearDefectsCount' => $clearDefectsCount,
            'yearMonth' => $yearMonth,
            'brands' => $brands,
            'selectBrands' => $selectBrands,
            'restaurants' => $restaurants,
        ]);
    }
}
