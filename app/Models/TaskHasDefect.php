<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskHasDefect extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'images' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function defect()
    {
        return $this->belongsTo(Defect::class);
    }

    public function restaurantWorkspace()
    {
        return $this->belongsTo(RestaurantWorkspace::class);
    }

    // 多一個 attr images_url 可以直接取得圖片網址
    public function getImagesUrlAttribute()
    {
        return collect($this->images)->map(function ($image) {
            return asset('storage/' . $image);
        });
    }
}
