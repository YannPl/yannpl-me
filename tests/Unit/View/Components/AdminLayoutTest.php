<?php

it('test that admin layout is rendered', function () {
    $component = new \App\View\Components\AdminLayout;
    $this->assertEquals('layouts.admin', $component->render()->name());
});
