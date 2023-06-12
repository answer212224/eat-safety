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
            $this->update($restaurant);
        }

        alert()->success('成功', '更新門市資料成功');

        return back();
    }

    public function update(Restaurant $restaurant)
    {
        $category = EatogetherCategory::getWorkspaceTypeByBrand($restaurant)->first();

        if (!$category) {
            if ($restaurant->sid == 'XUJ001') {
                $category = EatogetherCategory::getWorkspaceTypeBySid($restaurant)->first();
            } else if ($restaurant->sid == 'XUJ002' || $restaurant->sid == 'XUJ003') {
                $category = EatogetherCategory::getWorkspaceTypeByXUJ001AndXUJ002($restaurant)->first();
            } else {
                Log::info('無法取得門市資料', ['sid' => $restaurant->sid]);
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
}
