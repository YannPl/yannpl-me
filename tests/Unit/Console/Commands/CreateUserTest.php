<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

use function Pest\Laravel\artisan;

uses(RefreshDatabase::class);

it('creates a new user via the create-user command', function () {
    $name = 'Test User';
    $email = 'test@example.com';
    $password = 'secret';

    artisan('app:create-user')
        ->expectsQuestion("Enter the user's name", $name)
        ->expectsQuestion("Enter the user's email", $email)
        ->expectsQuestion("Enter the user's password", $password)
        ->assertExitCode(0)
        ->expectsOutputToContain('User created successfully with ID:')
        ->run();

    // Assert the user exists with the supplied name and email.
    $this->assertDatabaseHas('users', [
        'name' => $name,
        'email' => $email,
    ]);

    // Retrieve the user and check the password is hashed.
    $user = User::where('email', $email)->firstOrFail();
    $this->assertTrue(Hash::check($password, $user->password));
});
