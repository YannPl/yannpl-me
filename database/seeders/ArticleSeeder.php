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
        /** @var Category $categoryDev */
        $categoryDev = Category::where('slug', 'development')->first();
        /** @var Category $categoryDev */
        $categoryDesign = Category::where('slug', 'design')->first();
        /** @var User $author */
        $author = User::where('email', 'yann@test.com')->first();
        Article::factory()->create([
            'slug' => 'laravel-11-new-features',
            'is_published' => true,
            'category_id' => $categoryDev->id,
            'current_rich_content_id' => RichContent::where('uuid', 'b1b9b3b0-0b3b-4b3b-8b3b-0b3b3b3b3b3b')->firstOrFail()->id,
            'created_by_id' => $author->id,
        ]);
        Article::factory()->create([
            'slug' => 'laravel-12-new-features',
            'is_published' => true,
            'category_id' => $categoryDesign->id,
            'current_rich_content_id' => RichContent::where('uuid', '0111cbfb-8dbb-4bdf-8286-2f5fd886e7da')->firstOrFail()->id,
            'created_by_id' => $author->id,
        ]);
        Article::factory()->create([
            'slug' => 'laravel-13-new-features',
            'is_published' => true,
            'category_id' => $categoryDev->id,
            'current_rich_content_id' => RichContent::where('uuid', 'd4f4426f-b24e-46a7-a431-9fae12fd2d9e')->firstOrFail()->id,
            'created_by_id' => $author->id,
        ]);
        Article::factory()->create([
            'slug' => 'laravel-14-new-features',
            'is_published' => true,
            'category_id' => $categoryDesign->id,
            'current_rich_content_id' => RichContent::where('uuid', '35897af6-090d-4ece-aadd-b0a48a09456f')->firstOrFail()->id,
            'created_by_id' => $author->id,
        ]);
        Article::factory()->create([
            'slug' => 'laravel-15-new-features',
            'is_published' => true,
            'category_id' => $categoryDev->id,
            'current_rich_content_id' => RichContent::where('uuid', 'f55b72ab-cb5a-4a76-9361-edf3e59f7dd9')->firstOrFail()->id,
            'created_by_id' => $author->id,
        ]);
        Article::factory()->create([
            'slug' => 'laravel-16-new-features',
            'is_published' => true,
            'category_id' => $categoryDev->id,
            'current_rich_content_id' => RichContent::where('uuid', 'a4c20082-a840-49bb-87d2-d50cf1ecca7b')->firstOrFail()->id,
            'created_by_id' => $author->id,
        ]);
    }
}
