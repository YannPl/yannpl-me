<?php

namespace App\Livewire\Admin\Pages;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Index extends Component
{
    public function render(): View
    {
        return view('livewire.admin.pages.index');
    }
}
