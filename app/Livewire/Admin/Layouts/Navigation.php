<?php

namespace App\Livewire\Admin\Layouts;

use App\Livewire\Admin\Actions\Logout;
use Livewire\Component;

class Navigation extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}
