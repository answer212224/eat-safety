<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClearDefectController extends Controller
{
    public function table()
    {
        return view('v2.data.table.clear_defects.index', [
            'title' => '清檢缺失資料庫 v2',
        ]);
    }
}
