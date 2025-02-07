<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\RichContent;
use App\Models\User;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        /** @var Category $category */
        $category = Category::where('slug', 'development')->first();
        /** @var RichContent $richContent */
        $richContent = RichContent::where('uuid', 'b1b9b3b0-0b3b-4b3b-8b3b-0b3b3b3b3b3b')->first();
        /** @var User $author */
        $author = User::where('email', 'yann@test.com')->first();
        Article::factory()->create([
            'slug' => 'laravel-11-new-features',
            'is_published' => true,
            'category_id' => $category->id,
            'current_rich_content_id' => $richContent->id,
            'created_by_id' => $author->id,
        ]);
    }
}
