<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantWorkspace extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * hasMany TaskHasDefect
     */
    public function taskHasDefects()
    {
        return $this->hasMany(TaskHasDefect::class);
    }

    /**
     * hasMany TaskHasClearDefect
     */
    public function taskHasClearDefects()
    {
        return $this->hasMany(TaskHasClearDefect::class);
    }
}
