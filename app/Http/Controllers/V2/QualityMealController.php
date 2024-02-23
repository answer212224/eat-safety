<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QualityMealController extends Controller
{
    public function table()
    {
        return view('v2.data.quility.meals', [
            'title' => '(品保)採樣資料庫',
        ]);
    }
}
