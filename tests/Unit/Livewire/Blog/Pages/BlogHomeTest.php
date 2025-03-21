<?php

test('blog index returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
