<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories  = ['IT', 'Engineering', 'Marketing'];

        foreach ($categories as  $value) {
            Category::create([
                'name' => $value,
            ]);
        }
    }
}
