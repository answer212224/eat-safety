<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function table()
    {
        return view('v2.data.table.restaurants.index', [
            'title' => '門市資料庫',
        ]);
    }
}
