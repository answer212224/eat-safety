<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        return view('v2.data.meals.index', [
            'title' => '採樣資料庫 v.2',
        ]);
    }
}
