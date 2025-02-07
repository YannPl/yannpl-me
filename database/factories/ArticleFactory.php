<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'slug' => $this->faker->slug(),
            'is_published' => $this->faker->boolean(),
            'created_by_id' => 1,
            'current_rich_content_id' => 1,
            'category_id' => 1,
        ];
    }
}
