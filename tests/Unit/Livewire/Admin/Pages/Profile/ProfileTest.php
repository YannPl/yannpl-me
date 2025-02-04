<?php

use App\Models\User;

describe('Test Profile Page', function () {
    it('should display the profile page', function () {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
    });

    it('should display the update password form', function () {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertSeeLivewire('admin.pages.profile.update-password-form');
    });

    it('should display the delete user form', function () {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertSeeLivewire('admin.pages.profile.delete-user-form');
    });
});
