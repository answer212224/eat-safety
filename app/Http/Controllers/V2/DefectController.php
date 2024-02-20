<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefectController extends Controller
{
    public function table()
    {
        return view('v2.data.table.defects.index', [
            'title' => '食安缺失資料庫',
        ]);
    }

    public function record()
    {
        return view('v2.data.record.defects.index', [
            'title' => '食安缺失紀錄',
        ]);
    }
}
