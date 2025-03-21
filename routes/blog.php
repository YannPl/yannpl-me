<?php

Route::get('/', \App\Livewire\Blog\Pages\Home::class)->name('home');
Route::get('/{category}/{article_slug}', \App\Livewire\Blog\Pages\ArticlePage::class)->name('article');
// Route::get('/{category}', fn () => 'hello')->name('category');
