<?php

use App\Livewire\Admin\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

test('logged in user can logout', function () {
    Auth::shouldReceive('guard->logout')
        ->once()
        ->withNoArgs();

    Session::shouldReceive('invalidate')
        ->once()
        ->withNoArgs();
    Session::shouldReceive('regenerateToken')
        ->once()
        ->withNoArgs();

    $logout = new Logout;
    $logout();
});
