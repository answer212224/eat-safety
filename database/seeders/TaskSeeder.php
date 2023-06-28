<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('status', 1)->get();
        $restaurants = Restaurant::where('status', 1)->get();

        $users->each(function ($user) use ($restaurants) {
            $user->tasks()->createMany([
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
                [
                    'restaurant_id' => $restaurants->random()->id,
                    'category' => fake()->randomElement(['食安及5S', '清潔檢查', '餐點採樣']),
                    'task_date' => fake()->dateTimeBetween('-5 month', '+1 month'),
                    'status' => 'pending',
                ],
            ]);
        });
    }
}
