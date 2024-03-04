<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Meal;
use App\Models\Task;
use App\Models\Restaurant;
use App\Exports\MealsExport;
use App\Imports\MealsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class MealController extends Controller
{
    public function index()
    {
        $title = '採樣資料庫';

        confirmDelete('確定刪除', "您確定要刪除嗎？\n\n刪除後將無法復原！");

        // 這裡的 meals 是一個集合，所以可以使用 transform() 來改變集合裡面的每一個元素
        $meals = Meal::get()->transform(function ($item) {
            $item->effective_date = Carbon::create($item->effective_date)->format('Y-m');

            return $item;
        });

        return view('backend.meals.index', compact('title', 'meals'));
    }

    public function store(Request $request)
    {
        // requset.sid = restaurants.sid
        $restaurants = Restaurant::where('sid', $request->sid)->get();
        if ($restaurants->count() == 0) {
            // requset.sid = restaurants.brand_code
            $restaurants = Restaurant::where('brand_code', $request->sid)->get();
        }
        // 假如都沒有找到餐廳
        if ($restaurants->count() == 0) {
            Alert::error('錯誤', '請確認品牌店別代碼是否正確');
            return back();
        }

        // 新增餐點採樣
        $meal = Meal::create($request->all());

        // 取得 task.task_date的年月 = meal.effective_date 的年月 和 task.restaurant_id in (restaurants.id)
        $tasks = Task::where('task_date', 'like', Carbon::create($meal->effective_date)->format('Y-m') . '%')
            ->whereIn('restaurant_id', $restaurants->pluck('id'))
            ->get();

        // 將餐點採樣和任務做關聯
        $tasks->each(function ($task) use ($meal) {
            $task->meals()->attach($meal->id);
        });


        // restaurant.brand 和 restaurant.shop pluck.brand+shop
        Alert::success('成功', $meal->name . '新增成功，並且已經加入到' . $tasks->pluck('restaurant.brand')->unique()->implode('、') . '的' . $tasks->pluck('restaurant.shop')->unique()->implode('、') . '的任務中');

        return back();
    }

    public function edit(Meal $meal)
    {
        $title = '編輯採樣';
        // 如果有任務使用這個餐點採樣，就不給編輯
        $tasks = Task::whereHas('meals', function ($query) use ($meal) {
            $query->where('meal_id', $meal->id);
        })->get();

        if ($tasks->count() > 0) {
            Alert::error('錯誤', '此餐點採樣已經被使用，無法編輯');
            return back();
        }



        return view('backend.meals.edit', compact('title', 'meal'));
    }

    public function update(Meal $meal, Request $request)
    {
        $meal->update($request->all());

        Alert::success('成功', '餐點採樣更新成功');

        return back();
    }

    public function destroy(Meal $meal)
    {
        // 如果有任務使用這個餐點採樣，就不給刪除
        $tasks = Task::whereHas('meals', function ($query) use ($meal) {
            $query->where('meal_id', $meal->id);
        })->get();

        if ($tasks->count() > 0) {
            Alert::error('錯誤', '此餐點採樣已經被使用，無法刪除');
            return back();
        }

        $meal->delete();

        Alert::success('成功', '餐點採樣刪除成功');

        return back();
    }

    public function import(Request $request)
    {

        if ($request->file('excel') == null) {
            Alert::error('錯誤', '請選擇檔案');
            return back();
        }

        if ($request->file('excel')->getClientOriginalExtension() != 'xlsx') {
            Alert::error('錯誤', '檔案格式錯誤');
            return back();
        }

        try {
            Excel::import(new MealsImport, request()->file('excel'));
            Alert::success('成功', '餐點採樣匯入成功');
            return back();
        } catch (\Exception $e) {
            Alert::error('錯誤', $e->getMessage());
            return back();
        }
    }

    /**
     * 根據任務下載餐點採樣excel
     */
    public function export(Task $task)
    {
        $meals = $task->meals;

        $meals->transform(function ($item) use ($task) {
            $item->month = Carbon::create($item->effective_date)->format('Y-m');
            $item->date = $task->task_date;
            return $item;
        });

        return (new MealsExport($meals))->download("$task->task_date" . "_採樣.xlsx");
    }
}
