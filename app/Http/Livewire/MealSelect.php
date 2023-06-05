<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Meal;
use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\Restaurant;
use Illuminate\Support\Str;

class MealSelect extends Component
{
    public $hasMeal = false;
    public $hasProject = false;
    public $restaurant;
    public $start;
    public $category = "食安及5S";



    public function render()
    {
        $restaurant = Restaurant::find($this->restaurant);
        $start =  Carbon::create($this->start);

        if ($restaurant) {

            $optionMeals = Meal::whereYear('effective_date', $start->format('Y'))->whereMonth('effective_date', $start->format('m'))->where('sid',  $restaurant->sid)->get();
            $defaltMeals = Meal::whereYear('effective_date', $start->format('Y'))->whereMonth('effective_date', $start->format('m'))->where('sid',  Str::substr($restaurant->sid, 0, 3))->get();
        }

        return view('livewire.meal-select', [
            'users' => User::all(),
            'restaurants' => Restaurant::all(),
            'defaltMeals' => $defaltMeals ?? [],
            'optionMeals' => $optionMeals ?? [],
            'projects' => Project::where('status', true)->get(),
        ]);
    }
}
