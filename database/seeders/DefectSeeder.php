<?php

namespace Database\Seeders;

use App\Models\Defect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Defect::create(['effective_date' => today()->subYear(), 'group' => '待確認', 'title' => '待確認', 'category' => '待確認', 'description' => '待確認', 'report_description' => '待確認', 'deduct_point' => 0]);
        Defect::create(['effective_date' => today()->subYear(), 'group' => '待確認', 'title' => '待確認', 'category' => '待確認', 'description' => '其他', 'report_description' => '其他', 'deduct_point' => 0]);
    }
}
