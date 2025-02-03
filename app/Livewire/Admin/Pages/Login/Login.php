<?php

namespace App\Livewire\Admin\Pages\Login;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.login')]
class Login extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('admin', absolute: false), navigate: true);
    }

    /**
     * Redirect to admin route if user is already logged in when the page mounts.
     */
    public function mount(): void
    {
        if (Auth::check()) {
            $this->redirect(route('admin', absolute: false), navigate: true);
        }
    }
}
