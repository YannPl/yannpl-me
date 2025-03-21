<?php

namespace App\Livewire\Blog\Pages;

use App\Models\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.blog')]
class ArticlePage extends Component
{
    public ?Article $article = null;

    public function mount(string $category, string $article_slug): void
    {
        try {
            $this->article = Article::findBySlug($article_slug);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
}
