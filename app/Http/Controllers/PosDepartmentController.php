<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\PosDepartment;
use App\Models\EatogetherCategory;
use Illuminate\Support\Facades\Log;

class PosDepartmentController extends Controller
{
    public function upsert()
    {
        $posDepartments = PosDepartment::getRestaurants()->toArray();

        Restaurant::upsert($posDepartments, ['sid'], ['brand', 'brand_code', 'shop', 'location', 'status']);

        $restaurants = Restaurant::get();


        foreach ($restaurants as $restaurant) {
            self::update($restaurant);
        }

        alert()->success('成功', '更新門市資料成功');

        return back();
    }

    /**
     * 區站更新流程
     * 1. 透過品牌代碼取得category_type為workstation_in_type的資料
     * 2. 如果沒有資料，透過sid取得category_type為workstation_in_type的資料
     * 3. 如果還是沒有資料，log並return
     * 4. 透過category_id取得category_type為workstation_in_type的資料
     * 5. 將資料轉換成需要的格式
     * 6. 將外場資料加入
     * 7. 將資料更新或新增到restaurant_workspaces
     */
    public static function update(Restaurant $restaurant)
    {
        // 透過品牌代碼取得category_type為workstation_in_type的資料
        $category = EatogetherCategory::getWorkspaceTypeByBrand($restaurant)->first();

        // 如果沒有資料，透過sid取得category_type為workstation_in_type的資料
        if (!$category) {
            $category = EatogetherCategory::getWorkspaceTypeBySidLike($restaurant)->first();
            // 如果還是沒有資料，log並return
            if (!$category) {
                Log::info('找不到門市資料', ['sid' => $restaurant->sid]);
                return;
            }
        }

        $workspaces = EatogetherCategory::where('category_parent_id', optional($category)->category_id)->get();

        $workspaces->transform(function ($workspace) use ($restaurant) {
            return [
                'restaurant_id' => $restaurant->id,
                'category_value' => $workspace->category_value,
                'area' => $workspace->category_name,
            ];
        });
        $outside = [
            'restaurant_id' => $restaurant->id,
            'category_value' => 'outside',
            'area' => '外場',
        ];

        $workspaces->push($outside);

        foreach ($workspaces as $workspace) {
            $restaurant->restaurantWorkspaces()->updateOrCreate(
                ['category_value' => $workspace['category_value']],
                ['area' => $workspace['area']]
            );
        }
    }

    public static function sync()
    {
        $posDepartments = PosDepartment::getRestaurants()->toArray();

        Restaurant::upsert($posDepartments, ['sid'], ['brand', 'brand_code', 'shop', 'location', 'status']);

        $restaurants = Restaurant::get();


        foreach ($restaurants as $restaurant) {
            self::update($restaurant);
        }

        Log::info('更新門市資料成功');
    }
}
