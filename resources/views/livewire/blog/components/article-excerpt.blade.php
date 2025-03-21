<article
    class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
    <header class="mb-4 lg:mb-6 not-format">
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
            <a href="{{ route('article',[
                'article_slug' => $article->slug,
                'category' => $article->category->slug ?? 'uncategorized',
            ]) }}">{{ $article->currentRichContent->title }}</a></h1>
        <livewire:blog.components.article-metadata :$article/>
    </header>
    <figure><img class="rounded-xl"
                 src="https://www.yannpl.me/wp-content/uploads/2023/08/sereja-ris-g3B53PbBfwU-unsplash-1024x683.jpg"
                 alt="main image">
        <figcaption>{{ $article->currentRichContent->seo_title }}</figcaption>
    </figure>

    {{ $article->currentRichContent->excerpt_text }}

    <a href="#"
       class="inline-flex items-center no-underline font-medium text-blue-600 dark:text-blue-500 hover:underline">
        Read more
        <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>

</article>
