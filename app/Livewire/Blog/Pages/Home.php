<?php

namespace App\Livewire\Blog\Pages;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.blog')]
class Home extends Component
{
    public const int PAGE_SIZE = 5;

    /**
     * @var Collection<int, Article>
     */
    public Collection $articles;

    public function mount(int $page = 0): void
    {
        $this->articles = Article::query()->orderByDesc('created_at')
            ->skip($page * self::PAGE_SIZE)
            ->take(self::PAGE_SIZE)
            ->get();
    }
}
