<?php

Route::get('admin', \App\Livewire\Admin\Pages\Dashboard\Dashboard::class)
    ->middleware(['auth'])->name('admin');

Route::get('profile', \App\Livewire\Admin\Pages\Profile\Profile::class)
    ->middleware(['auth'])
    ->name('profile');

Route::get('write-article', \App\Livewire\Admin\Pages\Article\WriteArticle::class)
    ->middleware(['auth'])
    ->name('write-article');
