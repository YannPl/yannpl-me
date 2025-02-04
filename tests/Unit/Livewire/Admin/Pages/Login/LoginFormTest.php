<?php

use App\Livewire\Admin\Pages\Login\LoginForm;
use App\Models\User;

describe('Test Login Form', function () {
    it('should display error if email not filled', function () {
        Livewire::test(\Tests\FormTester::class, [LoginForm::class])
            ->set('form.email', '')
            ->set('form.password', '')
            ->call('formMethod', 'validate')
            ->assertHasErrors(['form.email' => 'required'])
            ->assertHasErrors(['form.password' => 'required']);
    });

    it('should display error if email is not valid', function () {
        Livewire::test(\Tests\FormTester::class, [LoginForm::class])
            ->set('form.email', 'test')
            ->set('form.password', 'password')
            ->call('formMethod', 'validate')
            ->assertHasErrors(['form.email' => 'email']);
    });

    it('should rate limit the login attempts', function () {
        $user = User::factory()->create([
            'email' => 'test@test.com',
            'password' => 'password',
        ]);

        for ($i = 0; $i < 5; $i++) {
            $errors = Livewire::test(\Tests\FormTester::class, [LoginForm::class])
                ->set('form.email', 'test@test.com')
                ->set('form.password', 'passwors')
                ->call('formMethod', 'authenticate')
                ->errors();
            assert($errors->has('form.email'));
            expect($errors->get('form.email'))->toContain('These credentials do not match our records.');

        }
        $errors = Livewire::test(\Tests\FormTester::class, [LoginForm::class])
            ->set('form.email', 'test@test.com')
            ->set('form.password', 'password')
            ->call('formMethod', 'authenticate')
            ->errors();
        assert($errors->has('form.email'));
        expect($errors->get('form.email')[0])->toContain('Too many login attempts.');
    });

});
