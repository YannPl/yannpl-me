<?php

use App\Livewire\Admin\Pages\Profile\UpdateProfileInformationForm;
use App\Models\User;

describe('Test Update Profile Information Form', function () {

    it('should display error if name not filled', function () {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(UpdateProfileInformationForm::class)
            ->set('name', '')
            ->set('email', 'test@test.com')
            ->call('updateProfileInformation')
            ->assertHasErrors(['name' => 'required']);
    });

    it('should display error if email not filled', function () {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(UpdateProfileInformationForm::class)
            ->set('name', 'Test')
            ->set('email', '')
            ->call('updateProfileInformation')
            ->assertHasErrors(['email' => 'required']);
    });

    it('should display error if email is not valid', function () {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(UpdateProfileInformationForm::class)
            ->set('name', 'Test')
            ->set('email', 'test')
            ->call('updateProfileInformation')
            ->assertHasErrors(['email' => 'email']);
    });

    it('should display error if email is not unique', function () {
        $user = User::factory()->create();
        $user2 = User::factory()->create();

        Livewire::actingAs($user)
            ->test(UpdateProfileInformationForm::class)
            ->set('name', 'Test')
            ->set('email', $user2->email)
            ->call('updateProfileInformation')
            ->assertHasErrors(['email' => 'unique']);
    });

    it('should update profile information', function () {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(UpdateProfileInformationForm::class)
            ->set('name', 'Test')
            ->set('email', 'test@test.com')
            ->call('updateProfileInformation')
            ->assertHasNoErrors();

        /** @var User $foundUser */
        $foundUser = User::findOrFail($user->id);
        expect($foundUser->name)->toBe('Test')
            ->and($foundUser->email)->toBe('test@test.com');
    });

});
