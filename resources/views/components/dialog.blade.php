@props(['maxWidth'])

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

<div x-data="{ show: @entangle($attributes->wire('model')) }" x-show="show" class="fixed z-50 inset-0 overflow-y-auto px-8 py-12 sm:px-0"
    style="display: none">
    <div class="fixed inset-0 bg-slate-500 opacity-40" x-on:click="show = false">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full {{ $maxWidth }} dark:bg-gray-800 dark:text-white">
                <div class="dark:bg-gray-800 dark:text-white px-4 pt-5 flex justify-between">

                    <div>
                        <img x-on:click="show = false" src="{{ asset('static/icons/close.svg') }}" class="h-6 w-6"
                            alt="">
                    </div>


                </div>
                <div class="px-4 pb-4 pt-3">
                    {{ $slot }}
                </div>

            </div>
        </div>
    </div>
</div>
