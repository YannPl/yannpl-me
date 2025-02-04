<?php

use App\Livewire\Admin\Actions\Logout;
use App\Livewire\Admin\Pages\Profile\DeleteUserForm;
use App\Models\User;

describe('Test Delete User Form', function () {
    it('should display error if password not filled', function () {
        Livewire::test(DeleteUserForm::class)
            ->set('password', '')
            ->call('deleteUser', new Logout)
            ->assertHasErrors(['password' => 'required']);
    });

    it('should display error if password is not valid', function () {
        $user = User::factory()->create([
            'email' => 'test@test.com',
            'password' => 'password',
        ]);

        Livewire::actingAs($user)
            ->test(DeleteUserForm::class)
            ->set('password', 'wrong')
            ->call('deleteUser', new Logout)
            ->assertHasErrors(['password' => 'current_password']);
    });

    it('should delete the user', function () {
        $user = User::factory()->create([
            'email' => 'test@test.com',
            'password' => 'password',
        ]);

        $this->assertDatabaseHas('users', ['email' => 'test@test.com']);

        Livewire::actingAs($user)
            ->test(DeleteUserForm::class)
            ->set('password', 'password')
            ->call('deleteUser', new Logout)
            ->assertRedirect('/');

        $this->assertDatabaseMissing('users', ['email' => 'test@test.com']);
    });
});
