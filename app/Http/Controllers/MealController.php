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
            Alert::error('Error', 'File is not correct');
            return back();
        }

        if ($request->file('excel')->getClientOriginalExtension() != 'xlsx') {
            Alert::error('Error', 'Only xlsx file is allowed');
            return back();
        }

        if ($request->file('excel')->getSize() > 1000000) {
            Alert::error('Error', 'File size is too large');
            return back();
        }

        Excel::import(new MealsImport, request()->file('excel'));
        Alert::success('Success', 'Import Success');
        return back();
    }
}
