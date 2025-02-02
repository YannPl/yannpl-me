<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Profile extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.profile');
    }
}
