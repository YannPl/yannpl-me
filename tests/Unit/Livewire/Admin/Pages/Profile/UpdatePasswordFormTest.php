<?php

use App\Livewire\Admin\Pages\Profile\UpdatePasswordForm;
use App\Models\User;

describe('Test Update Password Form', function () {
    it('should display error if current password not filled', function () {
        Livewire::test(UpdatePasswordForm::class)
            ->set('current_password', '')
            ->set('password', 'password')
            ->set('password_confirmation', 'password')
            ->call('updatePassword')
            ->assertHasErrors(['current_password' => 'required']);
    });

    it('should display error if password not filled', function () {
        Livewire::test(UpdatePasswordForm::class)
            ->set('current_password', 'password')
            ->set('password', '')
            ->set('password_confirmation', 'password')
            ->call('updatePassword')
            ->assertHasErrors(['password' => 'required']);
    });

    it('should display error if password confirmation not filled', function () {
        Livewire::test(UpdatePasswordForm::class)
            ->set('current_password', 'password')
            ->set('password', 'password')
            ->set('password_confirmation', '')
            ->call('updatePassword')
            ->assertHasErrors(['password' => 'confirmed']);
    });

    it('should display error if password confirmation does not match password', function () {
        Livewire::test(UpdatePasswordForm::class)
            ->set('current_password', 'password')
            ->set('password', 'password')
            ->set('password_confirmation', 'password1')
            ->call('updatePassword')
            ->assertHasErrors(['password' => 'confirmed']);
    });

    it('should display error if current password is incorrect', function () {
        $user = User::factory()->create([
            'password' => Hash::make('password'),
        ]);

        Livewire::actingAs($user)
            ->test(UpdatePasswordForm::class)
            ->set('current_password', 'password1')
            ->set('password', 'password')
            ->set('password_confirmation', 'password')
            ->call('updatePassword')
            ->assertHasErrors(['current_password' => 'current_password']);
    });

    it('should update the password', function () {
        $user = User::factory()->create([
            'password' => Hash::make('password'),
        ]);

        Livewire::actingAs($user)
            ->test(UpdatePasswordForm::class)
            ->set('current_password', 'password')
            ->set('password', 'password1')
            ->set('password_confirmation', 'password1')
            ->call('updatePassword')
            ->assertHasNoErrors()
            ->assertSet('current_password', '')
            ->assertSet('password', '')
            ->assertSet('password_confirmation', '');
    });

});
