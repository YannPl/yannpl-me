<?php

Route::get('admin', \App\Livewire\Admin\Pages\Index::class)
    ->middleware(['auth'])->name('admin');

Route::get('profile', \App\Livewire\Admin\Pages\Profile\Profile::class)
    ->middleware(['auth'])
    ->name('profile');
