<?php

use Illuminate\Support\Facades\Route;

Route::get('login', \App\Livewire\Admin\Pages\Auth\Login::class)
    ->name('login');
