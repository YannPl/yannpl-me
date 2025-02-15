<?php

namespace App\Livewire\Blog\Pages;

use App\Models\Article;
use App\Models\ArticleCollection;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.blog')]
class Home extends Component {
    public const PAGE_SIZE = 5;

    public ArticleCollection $articles;

    public function mount(int $page = 0): void
    {
        $this->articles = Article::orderByDesc('created_at')
            ->skip($page * self::PAGE_SIZE)
            ->take(self::PAGE_SIZE)
            ->get();
//        dd($this->articles);
    }
}
