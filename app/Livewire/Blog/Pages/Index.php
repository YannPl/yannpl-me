<?php

namespace App\Livewire\Blog\Pages;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.blog.pages.index');
    }
}
