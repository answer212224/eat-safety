<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Restaurant;

class AssignSelect extends Component
{
    public $user;
    public $restaurant;

    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.assign-select', [
            'users' => User::all(),
            'restaurants' => Restaurant::all(),
        ]);
    }
}
