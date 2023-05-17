<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $title = 'meals list';
        $meals = Meal::all();
        return view('backend.meals.index', compact('title', 'meals'));
    }
}
