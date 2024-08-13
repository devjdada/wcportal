<div
    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Blog</h3>
        <a href="#"
            class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
            View all
        </a>
    </div>
    <ol class="relative border-gray-200 dark:border-gray-700">
        @foreach ($blogs as $blog)
            <li class="flex gap-3 mb-10 ml-1">
                <img class="" width="200" height="auto" src="{{ $blog->image }}">
                <div>

                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                        {{ date('l jS \of F Y', strtotime($blog->dated)) }}
                    </time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $blog->title }}
                    </h3>
                    <p class="mb-1 text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of
                        {{ $blog->summary }}
                    </p>
                    <a href=""
                        class="inline-flex items-center text-xs font-medium hover:underline text-primary-700 sm:text-sm dark:text-primary-500">
                        Read More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </li>
        @endforeach


    </ol>
</div>
