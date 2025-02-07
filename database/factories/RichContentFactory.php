<?php

namespace Database\Factories;

use App\Models\RichContent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<RichContent>
 */
class RichContentFactory extends Factory
{
    protected $model = RichContent::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'title' => $this->faker->sentence(),
            'seo_title' => $this->faker->sentence(),
            'seo_description' => $this->faker->sentence(),
            'main_image' => $this->faker->imageUrl(),
            'html' => $this->faker->paragraph(),
            'editor_json' => $this->faker->paragraph(),
        ];
    }
}
