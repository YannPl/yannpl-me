<?php

namespace App\Livewire\Blog\Components;

use App\Models\Article;
use Livewire\Component;

class ArticleExcerpt extends Component
{
    public Article $article;

    public function mount(Article $article): void
    {
        $this->article = $article;
    }
}
