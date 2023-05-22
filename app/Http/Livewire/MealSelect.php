<?php

namespace App\Http\Livewire;

use App\Models\Meal;
use Livewire\Component;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Support\Str;

class MealSelect extends Component
{
    public $hasMeal = false;
    public $restaurant;
    public $start;



    public function render()
    {
        $restaurant = Restaurant::find($this->restaurant);
        $start =  Carbon::create($this->start);

        if ($restaurant) {

            $optionMeals = Meal::whereYear('effective_date', $start->format('Y'))->whereMonth('effective_date', $start->format('m'))->where('sid',  $restaurant->sid)->get();
            $defaltMeals = Meal::whereYear('effective_date', $start->format('Y'))->whereMonth('effective_date', $start->format('m'))->where('sid',  Str::substr($restaurant->sid, 0, 3))->get();
        }


        return view('livewire.meal-select', [
            'restaurants' => Restaurant::all(),
            'defaltMeals' => $defaltMeals ?? [],
            'optionMeals' => $optionMeals ?? [],
        ]);
    }
}
