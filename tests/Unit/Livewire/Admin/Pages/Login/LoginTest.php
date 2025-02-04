<?php

use App\Livewire\Admin\Pages\Login\Login;
use App\Models\User;

test('the admin login page renders successfully', function () {
    Livewire::test(Login::class)
        ->assertStatus(200);
});

test('the admin login page redirects to admin when user is already logged in', function () {
    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test(Login::class)
        ->assertRedirect(route('admin'));
});

test('the login method authenticates the user', function () {
    $user = User::factory()->create([
        'email' => 'test@test.com',
        'password' => Hash::make('password'),
    ]);

    Livewire::test(Login::class)
        ->set('form.email', 'test@test.com')
        ->set('form.password', 'password')
        ->call('login')
        ->assertRedirect(route('admin'));

});
