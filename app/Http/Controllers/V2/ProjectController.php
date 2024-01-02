<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // 專案資料庫v2
    public function table()
    {
        return view('v2.data.table.projects.index', [
            'title' => '專案資料庫 v2',

        ]);
    }
}
