@props(['maxWidth', 'title', 'close' => true])

@php
    // $id = $id ?? md5($attributes->wire('model'));

    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ][$maxWidth ?? '2xl'];
@endphp

<div x-data="{ show: @entangle($attributes->wire('model')) }" x-show="show" class="fixed inset-0 z-50 px-8 py-12 overflow-y-auto sm:px-0"
    style="display: none">
    <div class="fixed inset-0 bg-slate-500 opacity-40" x-on:click="show = false">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full {{ $maxWidth }} dark:bg-gray-800 dark:text-white">
                <div class="flex justify-between px-4 pt-5 pb-8 dark:bg-gray-800 dark:text-white">

                    <div class="flex items-start justify-between border-b rounded-t dark:border-gray-700">
                        <h3 class="text-xl font-semibold dark:text-white">
                            {{ $title }}
                        </h3>
                    </div>

                    <div x-show="close">
                        <img x-on:click="show = false" src="{{ asset('static/icons/close.svg') }}" class="w-6 h-6"
                            alt="">
                    </div>


                </div>
                <div class="px-4 pt-3 pb-4">
                    {{ $slot }}
                </div>

            </div>
        </div>
    </div>
</div>
