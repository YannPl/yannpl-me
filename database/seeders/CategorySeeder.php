<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Development',
            'slug' => 'development',
        ]);

        Category::factory()->create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Category::factory()->create([
            'name' => 'Marketing',
            'slug' => 'marketing',
        ]);

        Category::factory()->create([
            'name' => 'Business',
            'slug' => 'business',
        ]);
    }
}
