<?php

namespace App\Livewire\Blog\Components;

use App\Models\Article;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Collection;

/**
 * Display the 4 latest articles from the same category / tag
 * If there are not enough articles, display the latest articles not already displayed
 */
class RelatedArticles extends Component
{
    public Article $article;

    public Collection $relatedArticles;

    public function mount(Article $article): void
    {
        $this->article = $article;
        // TODO fetch related articles from the same category / tags
    }
}
