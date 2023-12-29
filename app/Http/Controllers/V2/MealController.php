<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function table()
    {
        return view('v2.data.table.meals.index', [
            'title' => '採樣資料庫 v.2',
        ]);
    }

    public function record()
    {
        return view('v2.data.record.meals.index', [
            'title' => '採樣紀錄 v.2',
        ]);
    }
}
