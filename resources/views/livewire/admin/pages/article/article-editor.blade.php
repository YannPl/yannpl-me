<section class="bg-white dark:bg-gray-900">
    <form wire:submit="saveArticle" class="mt-6 space-y-6">
        <div>
            <x-admin.input-label for="editForm.title" :value="__('Title')" />
            <x-admin.text-input wire:model="editForm.title" id="editForm.title" name="title" type="text" class="mt-1 block w-full" required autofocus />
            <x-admin.input-error class="mt-2" :messages="$errors->get('editForm.title')" />
        </div>

        <div>
            <x-admin.input-label for="editForm.seoTitle" :value="__('SEO Title')" />
            <x-admin.text-input wire:model="editForm.seoTitle" id="editForm.seoTitle" name="seoTitle" type="text" class="mt-1 block w-full" required />
            <x-admin.input-error class="mt-2" :messages="$errors->get('editForm.title')" />
        </div>

        <div>
            <x-admin.input-label for="editForm.seoDescription" :value="__('SEO Description')" />
            <x-admin.text-input wire:model="editForm.seoDescription" id="editForm.seoDescription" name="seoDescription" type="text" class="mt-1 block w-full" required />
            <x-admin.input-error class="mt-2" :messages="$errors->get('editForm.seoDescription')" />
        </div>

        <div>
            <x-admin.input-label for="editForm.mainImage" :value="__('Main Image')" />
            <img src="{{ $editForm->mainImage }}" alt="Main Image" class="w-1/4 h-1/4">
            <input wire:model="editForm.mainImage" id="file_input" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
            <x-admin.input-error class="mt-2" :messages="$errors->get('editForm.mainImage')" />
        </div>

        <div class="flex items-center gap-4">
            <x-admin.primary-button>{{ __('Save') }}</x-admin.primary-button>

            <x-admin.action-message class="me-3" on="profile-updated">
                {{ __('Saved.') }}
            </x-admin.action-message>
        </div>
    </form>
</section>
