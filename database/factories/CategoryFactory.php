<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $categoryName = $this->faker->word();

        return [
            'uuid' => $this->faker->uuid(),
            'slug' => Str::slug($categoryName),
            'name' => $categoryName,
        ];
    }
}
