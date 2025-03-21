<div>
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

        {!! $article->currentRichContent->html !!}
    </article>
    <livewire:blog.components.related-articles :$article />
</div>
