@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 text-gray-900 dark:text-white dark:bg-gray-800">
        <div class="text-lg font-medium ">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm ">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-800 text-end">
        {{ $footer }}
    </div>
</x-modal>
