<?php

use App\Livewire\Blog\Layouts\Navigation;
use App\Models\User;

test('the blog navigation component renders successfully', function () {
    Livewire::test(Navigation::class)
        ->assertStatus(200);
});

test('the blog navigation shows login when no user is authenticated', function () {
    Livewire::test(Navigation::class)
        ->assertSee('Log in');
});

test('the blog navigation shows admin link when a user is authenticated', function () {
    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test(Navigation::class)
        ->assertSee('Admin');
});
