<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosDepartment extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'pos_department';

    public static function getRestaurants()
    {
        $restaurants = PosDepartment::where('pos_type', 0)->orWhere('pos_type', 1)->get();
        $restaurants->transform(function ($restaurant) {
            return [
                'sid' => $restaurant->department_ch_id,
                'brand' => $restaurant->department_type_name,
                'brand_code' => $restaurant->department_type_code,
                'shop' => $restaurant->survey_name,
                'address' => null,
                'location' => $restaurant->area,
                'status' => $restaurant->pos_status,
            ];
        });
        return $restaurants;
    }
}
