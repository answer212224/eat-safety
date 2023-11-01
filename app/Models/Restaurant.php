<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function restaurantWorkspaces()
    {

        return $this->hasMany(RestaurantWorkspace::class)->orderBy('sort');
    }

    public function restaurantBackWorkspaces()
    {
        return $this->hasMany(RestaurantWorkspace::class)->where('area', 'not like', '%外場')->orderBy('sort');
    }

    // 取得外場(area是外場)
    public function restaurantFrontWorkspace()
    {
        return $this->hasOne(RestaurantWorkspace::class)->where('area', 'like', '%外場');
    }

    // 取得西廚(area有包含西廚的字串)
    public function restaurantWesternKitchenWorkspaces()
    {
        return $this->hasMany(RestaurantWorkspace::class)->where('area', 'like', '%西廚%')->orderBy('sort');
    }

    // 取得中廚(area有包含中廚的字串)
    public function restaurantChineseKitchenWorkspaces()
    {
        return $this->hasMany(RestaurantWorkspace::class)->where('area', 'like', '%中廚%')->orderBy('sort');
    }

    // 取得日廚(area有包含日廚的字串)
    public function restaurantJapaneseKitchenWorkspaces()
    {
        return $this->hasMany(RestaurantWorkspace::class)->where('area', 'like', '%日廚%')->orderBy('sort');
    }

    // 取得西點(area有包含西點的字串)
    public function restaurantPastryKitchenWorkspaces()
    {
        return $this->hasMany(RestaurantWorkspace::class)->where('area', 'like', '%西點%')->orderBy('sort');
    }

    // 取得洗碗區(area有包含未定的字串)
    public function restaurantWashingAreaWorkspaces()
    {
        return $this->hasMany(RestaurantWorkspace::class)->where('area', 'like', '%洗碗區%')->orderBy('sort');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
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
