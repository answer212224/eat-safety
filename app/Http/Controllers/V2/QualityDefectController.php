<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QualityDefectController extends Controller
{
    public function table()
    {
        return view('v2.data.quility.defects', [
            'title' => '(品保)食安條文資料庫',
        ]);
    }
}
