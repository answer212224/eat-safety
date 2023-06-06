<?php

namespace App\Http\Controllers;

use App\Imports\MealsImport;
use App\Models\Meal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class MealController extends Controller
{
    public function index()
    {
        $title = 'meals list';

        confirmDelete('確定刪除', "您確定要刪除嗎？\n\n刪除後將無法復原！");

        $meals = Meal::get()->transform(function ($item) {
            $item->effective_date = Carbon::create($item->effective_date)->format('Y-m');

            return $item;
        });

        return view('backend.meals.index', compact('title', 'meals'));
    }

    public function store(Request $request)
    {

        Meal::create($request->all());

        Alert::success('成功', '餐點採樣新增成功');


        return back();
    }

    public function update(Request $request, Meal $meal)
    {

        $meal->update($request->all());

        Alert::success('成功', '餐點採樣更新成功');

        return back();
    }

    public function destroy(Meal $meal)
    {

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
}
