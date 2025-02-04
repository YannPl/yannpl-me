<?php

namespace App\Livewire\Admin\Pages\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Dashboard extends Component
{
    public function render(): View
    {
        return view('livewire.admin.pages.dashboard.dashboard');
    }
}
