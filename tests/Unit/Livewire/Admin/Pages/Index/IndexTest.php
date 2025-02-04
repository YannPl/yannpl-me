<?php

use App\Livewire\Admin\Pages\Dashboard\Dashboard;
use App\Models\User;

it('Test the admin dashboard page renders successfully', function () {
    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test(Dashboard::class)
        ->assertStatus(200);
});
