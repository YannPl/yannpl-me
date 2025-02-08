<?php

namespace App\Livewire\Admin\Pages\Article;

use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin', ['title' => 'Write Article'])]
class WriteArticle extends Component
{
    public Article $article;

    public function mount(): void
    {
        /** @var Article $article */
        $article = Article::first();
        $this->article = $article;
    }
}
