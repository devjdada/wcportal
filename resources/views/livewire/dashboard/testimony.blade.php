<div
    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Testimony</h3>
        <a href="#"
            class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
            View all
        </a>
    </div>
    @foreach ($testimonies as $t)
        <figure
            class="flex gap-4 p-8 text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-white dark:border-gray-700 sm:p-6 dark:bg-gray-800">

            <div class="pt-6 space-y-4 text-left md:p-8">
                <blockquote>
                    <h1 class="text-lg font-bold">
                        {{ $t->title }}
                    </h1>
                    <p class="text-xs font-thin text-justify">
                        {{ $t->testimony }}
                    </p>
                </blockquote>
                <figcaption class="font-medium">
                    <div class="text-sky-500 dark:text-sky-400">
                        {{ $t->name }}
                    </div>
                    {{-- <div class="text-slate-700 dark:text-slate-500">
                        Staff Engineer, Algolia
                    </div> --}}
                </figcaption>
            </div>
            <img class="w-20 h-20 mx-auto md:w-28 md:h-auto md:rounded-none" src="{{ $t->image }}" alt="">
        </figure>
    @endforeach

</div>
