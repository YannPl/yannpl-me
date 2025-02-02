<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.index');
    }
}
