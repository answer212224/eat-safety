<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskHasClearDefect extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'images' => 'array',
        'description' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function clearDefect()
    {
        return $this->belongsTo(ClearDefect::class);
    }

    public function restaurantWorkspace()
    {
        return $this->belongsTo(RestaurantWorkspace::class);
    }
}
