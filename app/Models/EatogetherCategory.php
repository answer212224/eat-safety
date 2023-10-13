<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EatogetherCategory extends Model
{


    protected $connection = 'mysql2';
    protected $table = 'eatogether_category';

    public static function getCategoryTypesEqualTo($categoryType)
    {
        return EatogetherCategory::where('category_type', $categoryType);
    }

    public static function getWorkspaceTypeByBrand(Restaurant $restaurant)
    {
        return EatogetherCategory::getCategoryTypesEqualTo('workstation_in_type')->where('category_value', $restaurant->brand_code);
    }

    public static function getWorkspaceTypeBySid(Restaurant $restaurant)
    {
        return EatogetherCategory::getCategoryTypesEqualTo('workstation_in_type')->where('category_value', $restaurant->sid);
    }

    // 用like查詢
    public static function getWorkspaceTypeBySidLike(Restaurant $restaurant)
    {
        return EatogetherCategory::getCategoryTypesEqualTo('workstation_in_type')->where('category_value', 'like', '%' . $restaurant->sid . '%');
    }

    public static function getWorkspaceTypeByXUJ001AndXUJ002()
    {
        return EatogetherCategory::getCategoryTypesEqualTo('workstation_in_type')->where('category_value', 'XUJ002,XUJ003,XUJ005');
    }
}
