<?php

Route::get('/', \App\Livewire\Blog\Pages\Home::class)->name('home');
// Route::get('/{category}/{article}', \App\Livewire\Blog\Pages\Article::class);
Route::get('/{category}', fn () => 'hello')->name('category');
