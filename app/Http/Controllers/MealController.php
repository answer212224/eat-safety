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
        $meals = Meal::get()->transform(function ($item) {
            $item->effective_date = Carbon::create($item->effective_date)->format('Y-m');

            return $item;
        });

        return view('backend.meals.index', compact('title', 'meals'));
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
            Alert::success('Success', 'Import Success');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
            return back();
        }
    }
}
