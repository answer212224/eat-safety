<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('backend.restaurants.index', [
            'title' => '餐廳資料',
            'restaurants' => Restaurant::all(),
        ]);
    }

    public function create()
    {
        return view('backend.restaurants.create', [
            'title' => '新增餐廳',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        Restaurant::create($request->all());

        return redirect()->route('restaurant-index');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('backend.restaurants.edit', [
            'title' => '編輯餐廳',
            'restaurant' => $restaurant,
        ]);
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $restaurant->update($request->all());

        return redirect()->route('restaurant-index');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurant-index');
    }

    public function show(Restaurant $restaurant)
    {
        return view('backend.restaurants.show', [
            'title' => '工作區資料',
            'restaurant' => $restaurant,
        ]);
    }
}
