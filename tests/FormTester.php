<?php

namespace Tests;

use Livewire\Component;
use Livewire\Form;

class FormTester extends Component
{
    public string $formClass = '';

    public Form $form;

    public function mount(string $formClass): void
    {
        /** @var Form $form */
        $form = new $formClass($this, 'form');
        $this->form = $form;
    }

    public function formMethod(string $method, array $args = []): void
    {
        if (method_exists($this->form, $method)) {
            $this->form->{$method}(...$args);
        }
    }

    public function render(): string
    {
        return '<div></div>';
    }
}
