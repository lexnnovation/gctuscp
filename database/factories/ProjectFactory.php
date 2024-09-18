<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => User::all()->random(),
            'category_id' => Category::all()->random(),
            'name' => fake()->name(),
            'description' => fake()->text(),
            'thumbnail' => fake()->url(),
            'total_views' => rand(0, 20000),
            'is_featured' => fake()->boolean(90),
            'is_trending' => fake()->boolean(90),
        ];
    }
}
