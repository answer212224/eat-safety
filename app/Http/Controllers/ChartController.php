<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $title = '圖表';
        return view('backend.chart.index', [
            'title' => $title,
        ]);
    }
}
