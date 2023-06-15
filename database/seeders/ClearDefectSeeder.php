<?php

namespace Database\Seeders;

use App\Models\ClearDefect;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClearDefectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClearDefect::create(['effective_date' => today()->subYear(), 'main_item' => '待確認', 'sub_item' => '待確認']);
        ClearDefect::create(['effective_date' => today()->subYear(), 'main_item' => '待確認', 'sub_item' => '其他']);
    }
}
