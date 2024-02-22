<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QualityClearDefectController extends Controller
{
    public function table()
    {
        return view('v2.data.quility.clear-defects', [
            'title' => '(品保)清檢條文資料庫',
        ]);
    }
}
