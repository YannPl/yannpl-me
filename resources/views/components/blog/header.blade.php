<section class="bg-gray-50 dark:bg-gray-800">
    <div class="pt-4 pb-0 px-4 mx-auto max-w-screen-xl text-center lg:pb-0 lg:pt-8">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-2xl lg:text-6xl dark:text-white">
            <span class="text-transparent text-6xl bg-clip-text bg-gradient-to-r from-blue-700 to-purple-700"><a href="{{ route('home') }}">YannPl</a></span> <br/>
            <span class="text-2xl text-gray-500 font-extralight">Tech, Photo, Adventure, random human's blog</span></h1>
    </div>

    <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="align-content-center items-center justify-left hidden w-full md:flex md:w-auto md:order-2" id="navbar-search">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                </ul>
            </div>
            <x-blog.social-links />
            <x-blog.search-input />
        </div>
    </nav>

</section>
