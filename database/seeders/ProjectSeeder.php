<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => '環境衛生', 'description' => '地面破損、地磚剝落之總面積≧50元硬幣大小達三處，且同仁無修繕申請記錄'
        ]);
        Project::create([
            'name' => '環境衛生', 'description' => '排水孔未封堵'
        ]);
        Project::create([
            'name' => '環境衛生', 'description' => '任一壁面破損、磁磚剝落之總面積≧50元硬幣大小達三處，且同仁無修繕申請記錄'
        ]);
        Project::create([
            'name' => '文件及紀錄表單', 'description' => '模擬衛生局稽核，查驗相關紀錄文件，任一文件無法提供或說明文件下載處'
        ]);
        Project::create([
            'name' => '文件及紀錄表單', 'description' => '模擬衛生局稽核，查驗相關紀錄文件，任一文件不符合標準'
        ]);
        Project::create([
            'name' => '非食品作業場所', 'description' => '廁所無標示「如廁後應洗手」文宣'
        ]);
    }
}
