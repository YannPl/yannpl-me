<?php

namespace App\Livewire\Blog\Components;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class ArticleMetadata extends Component
{
    public Category $category;

    public string $isoDate;

    public string $formattedDate;

    public string $creatorName;

    public function mount(Article $article): void
    {
        $this->creatorName = $article->creator->name ?? 'Guest';
        $this->category = $article->category;
        $this->isoDate = $article->created_at->toIso8601String();
        $this->formattedDate = $article->created_at->format('F j, Y');
    }
}
