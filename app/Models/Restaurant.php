<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'shop',
        'address',
        'location',
    ];

    public function restaurantWorkspaces()
    {
        return $this->hasMany(RestaurantWorkspace::class);
    }

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

    public static function getDistinctBrands()
    {
        return self::select('brand')->distinct()->get();
    }

    public static function getWhereBrand($brand)
    {
        return self::where('brand', $brand)->get();
    }
}
