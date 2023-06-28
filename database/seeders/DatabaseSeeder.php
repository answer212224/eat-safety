<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Meal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // WithoutModelEvents::class;
        $this->call([
            PermissionsDemoSeeder::class,
            // DefectSeeder::class,
            // ClearDefectSeeder::class,
            // MealSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
