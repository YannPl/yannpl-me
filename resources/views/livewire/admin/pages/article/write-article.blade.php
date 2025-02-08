<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Write a new article') }}
    </h2>
</x-slot>
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
        <div>
            Editing article {{ $article->id }}
        </div>
        <livewire:admin.pages.article.article-editor :article="$article"/>
    </div>
</main>
