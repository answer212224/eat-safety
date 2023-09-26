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
        $restaurant->load('restaurantWorkspaces', 'restaurantWorkspaces.taskHasDefects', 'restaurantWorkspaces.taskHasClearDefects');

        $defects = $restaurant->restaurantWorkspaces->map(function ($workspace) {
            return $workspace->taskHasDefects->filter(function ($defect) {
                return $defect->created_at->year == Carbon::now()->year;
            });
        })->flatten();

        $clearDefects = $restaurant->restaurantWorkspaces->map(function ($workspace) {
            return $workspace->taskHasClearDefects->filter(function ($defect) {
                return $defect->created_at->year == Carbon::now()->year;
            });
        })->flatten();

        // 依照一月到十二月的順序，取得每個月的缺失數量，若該月份沒有缺失，則為0
        $defects = collect(range(1, 12))->map(function ($month) use ($defects) {
            return $defects->filter(function ($defect) use ($month) {
                return $defect->created_at->month == $month;
            })->count();
        });

        $clearDefects = collect(range(1, 12))->map(function ($month) use ($clearDefects) {
            return $clearDefects->filter(function ($defect) use ($month) {
                return $defect->created_at->month == $month;
            })->count();
        });

        return view('backend.restaurants.chart', [
            'title' => $restaurant->brand . $restaurant->shop,
            'restaurant' => $restaurant,
            'defects' => $defects,
            'clearDefects' => $clearDefects,
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
