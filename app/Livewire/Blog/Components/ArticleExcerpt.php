<?php

namespace App\Livewire\Blog\Components;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class ArticleExcerpt extends Component {
    public Article $article;
    public Category $category;
    public string $isoDate;
    public string $formattedDate;

    public function mount(Article $article) {
        $this->article = $article;
        $this->category = $article->category;
        $this->isoDate = $article->created_at->toIso8601String();
        $this->formattedDate = $article->created_at->format('F j, Y');
    }
}
