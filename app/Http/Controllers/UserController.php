<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $user = User::first();
        // dd();
        return view('backend.users.index', [
            'title' => '使用者資料',
            'users' => User::all(),
        ]);
    }
}
