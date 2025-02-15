<x-slot:subtitle>Tech, Photo, Adventure, random human's blog</x-slot>

<div>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        @foreach($articles as $article)
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl mb-8">
                <livewire:blog.components.article-excerpt :$article />
        </div>
        @endforeach
    </main>

    <livewire:blog.components.related-articles/>



</div>
