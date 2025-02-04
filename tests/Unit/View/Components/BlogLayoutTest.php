<?php

it('test that blog layout is rendered', function () {
    $component = new \App\View\Components\BlogLayout;
    $this->assertEquals('layouts.blog', $component->render()->name());
});
