<?php

it('test that login layout is rendered', function () {
    $component = new \App\View\Components\LoginLayout;
    $this->assertEquals('layouts.login', $component->render()->name());
});
