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
    public $hasMeal = true;
    public $hasProject = true;
    public $restaurant;
    public $start;
    public $category = "食安及5S";

    public function mount()
    {
        $this->start = Carbon::today()->addHours(8)->format('Y-m-d H:i');
    }
    public function render()
    {
        if ($this->category == "餐點採樣") {
            $this->hasMeal = true;
        }
        $restaurant = Restaurant::find($this->restaurant);
        $start =  Carbon::create($this->start);

        if ($restaurant) {

            $optionMeals = Meal::whereYear('effective_date', $start->format('Y'))->whereMonth('effective_date', $start->format('m'))->where('sid',  $restaurant->sid)->get();
            $defaltMeals = Meal::whereYear('effective_date', $start->format('Y'))->whereMonth('effective_date', $start->format('m'))->where('sid',  $restaurant->brand_code)->get();
        }

        return view('livewire.meal-select', [
            'users' => User::permission('execute-task')->get(),
            'restaurants' => Restaurant::where('status', true)->get()->groupBy('brand'),
            'defaltMeals' => $defaltMeals ?? [],
            'optionMeals' => $optionMeals ?? [],
            'projects' => Project::where('status', true)->get(),
        ]);
    }
}
