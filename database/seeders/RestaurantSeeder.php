<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create(['sid' => 'EAT002', 'brand' => '饗食', 'shop' => '新光', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '中部']);
        Restaurant::create(['sid' => 'EAT005', 'brand' => '饗食', 'shop' => '板橋', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '北部']);
        Restaurant::create(['sid' => 'GUO002', 'brand' => '果然匯', 'shop' => '板橋', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '北部']);
        Restaurant::create(['sid' => 'IPD001', 'brand' => '饗饗', 'shop' => '微風', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '北部']);
        Restaurant::create(['sid' => 'XUJ001', 'brand' => '旭集', 'shop' => '信義', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '北部']);
        Restaurant::create(['sid' => 'XFR001', 'brand' => '小福利', 'shop' => '中和', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '北部']);
        Restaurant::create(['sid' => 'XFR002', 'brand' => '小福利', 'shop' => '竹北遠百', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '北部']);
        Restaurant::create(['sid' => 'DOR003', 'brand' => '朵頤', 'shop' => '新莊', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '北部']);
        Restaurant::create(['sid' => 'STB005', 'brand' => '饗泰多', 'shop' => '松高', 'address' => '974 雲林縣林內鄉河南東四街六段128巷442號', 'location' => '北部']);

        Restaurant::find(1)->restaurantWorkspaces()->create(['area' => '中廚現炒砂鍋', 'chef' => '中廚']);
        Restaurant::find(1)->restaurantWorkspaces()->create(['area' => '中廚烤鴨冷台', 'chef' => '中廚']);
        Restaurant::find(1)->restaurantWorkspaces()->create(['area' => '中廚熟鍋內廚', 'chef' => '中廚']);
        Restaurant::find(1)->restaurantWorkspaces()->create(['area' => '西廚義麵披薩', 'chef' => '西廚']);
        Restaurant::find(1)->restaurantWorkspaces()->create(['area' => '西廚鐵板', 'chef' => '西廚']);
        Restaurant::find(1)->restaurantWorkspaces()->create(['area' => '日廚生魚片壽司', 'chef' => '日廚']);
        Restaurant::find(1)->restaurantWorkspaces()->create(['area' => '日廚烤炸', 'chef' => '日廚']);
        Restaurant::find(1)->restaurantWorkspaces()->create(['area' => '外場', 'chef' => '外場']);

        Restaurant::find(3)->restaurantWorkspaces()->create(['area' => '中廚', 'chef' => '中廚']);
        Restaurant::find(3)->restaurantWorkspaces()->create(['area' => '西廚', 'chef' => '西廚義麵披薩']);
        Restaurant::find(3)->restaurantWorkspaces()->create(['area' => '西廚', 'chef' => '西廚鐵板熱鍋']);
        Restaurant::find(3)->restaurantWorkspaces()->create(['area' => '日廚', 'chef' => '日廚壽司蒸物']);
        Restaurant::find(3)->restaurantWorkspaces()->create(['area' => '日廚', 'chef' => '日廚烤炸']);
        Restaurant::find(3)->restaurantWorkspaces()->create(['area' => '西點', 'chef' => '西點水果飲品']);
        Restaurant::find(3)->restaurantWorkspaces()->create(['area' => '外場', 'chef' => '外場']);
    }
}
