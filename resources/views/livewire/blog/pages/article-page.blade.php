<x-slot:subtitle>{{ $article->currentRichContent->seo_title }}</x-slot>

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <livewire:blog.components.article-full :$article />
</main>
