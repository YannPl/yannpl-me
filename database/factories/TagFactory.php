<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Tag>
 */
class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition(): array
    {
        $tagName = $this->faker->colorName();

        return [
            'uuid' => $this->faker->uuid(),
            'slug' => Str::slug($tagName),
            'name' => $tagName,
        ];
    }
}
