<?php

use App\Livewire\Admin\Layouts\Navigation;
use App\Models\User;

test('the admin navigation component renders successfully', function () {
    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test(Navigation::class)
        ->assertStatus(200);
});
