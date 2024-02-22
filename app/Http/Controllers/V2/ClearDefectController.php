<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClearDefectController extends Controller
{
    public function table()
    {
        return view('v2.data.table.clear_defects.index', [
            'title' => '清檢條文資料庫',
        ]);
    }
}
