<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function table()
    {
        return view('v2.data.table.users.index', [
            'title' => '使用者資料庫',
        ]);
    }
}
