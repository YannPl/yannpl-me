<?php

test('single article page returns a successful response', function () {
    $response = $this->get('/design/laravel-14-new-features');

    $response->assertStatus(200);
});

test('single article page returns an error response', function () {
    $response = $this->get('/category/invalid-url');

    $response->assertStatus(404);
});
