<?php

use Illuminate\Support\Facades\Route;

Route::get('login', \App\Livewire\Admin\Pages\Login\Login::class)
    ->name('login');
