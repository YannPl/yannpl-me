<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form wire:submit="updatePassword" class="mt-6 space-y-6">
        <div>
            <x-admin.input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-admin.text-input wire:model="current_password" id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-admin.input-error :messages="$errors->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-admin.input-label for="update_password_password" :value="__('New Password')" />
            <x-admin.text-input wire:model="password" id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-admin.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-admin.input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-admin.text-input wire:model="password_confirmation" id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-admin.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-admin.primary-button>{{ __('Save') }}</x-admin.primary-button>

            <x-admin.action-message class="me-3" on="password-updated">
                {{ __('Saved.') }}
            </x-admin.action-message>
        </div>
    </form>
</section>
