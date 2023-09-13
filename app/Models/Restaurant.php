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
        // 假如area是"1廚務部或幹部"，不要取得該筆資料
        return $this->hasMany(RestaurantWorkspace::class)->where('area', 'not like', '%廚務部')->where('area', 'not like', '幹部')->orderBy('category_value');
    }

    // 取得內場區域(area不是廚務部和幹部和外場)
    public function restaurantBackWorkspaces()
    {
        return $this->hasMany(RestaurantWorkspace::class)->where('area', 'not like', '%廚務部')->where('area', 'not like', '幹部')->where('area', 'not like', '%外場')->orderBy('category_value');
    }

    // 取得外場(area是外場)
    public function restaurantFrontWorkspace()
    {
        return $this->hasOne(RestaurantWorkspace::class)->where('area', 'like', '%外場');
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
