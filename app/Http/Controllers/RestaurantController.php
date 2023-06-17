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
            'title' => '門市資料',
            'restaurants' => Restaurant::all(),
        ]);
    }

    public function create()
    {
        return view('backend.restaurants.create', [
            'title' => '新增餐廳',
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

    public function chart(Restaurant $restaurant)
    {
        // 取得今年該餐廳的所有任務
        $tasks = $restaurant->tasks()->whereYear('task_date', today())->get();

        // 將任務的日期轉換成月份
        $tasks = $tasks->map(function ($task) {
            $task->month = Carbon::parse($task->task_date)->month;
            return $task;
        });

        // 以分類分組
        $tasks = $tasks->groupBy('category');

        // 以月份分組，並計算該月份的任務數量
        $tasks = $tasks->map(function ($task) {
            return $task->groupBy('month')->map(function ($item) {
                return $item->count();
            });
        });

        // 將月份補齊
        $tasks = $tasks->map(function ($task) {
            for ($i = 1; $i <= 12; $i++) {
                if (!isset($task[$i])) {
                    $task[$i] = 0;
                }
            }
            return $task;
        });



        // 依照分類裡的月份排序
        $tasks = $tasks->map(function ($task) {
            return $task->sortBy(function ($item, $key) {
                return $key;
            });
        });

        return view('backend.restaurants.chart', [
            'title' => $restaurant->brand . $restaurant->shop,
            'restaurant' => $restaurant,
            'tasks' => $tasks,
        ]);
    }
}
