@props(['href', 'image' => null, 'role' => 'user'])

@php
    if ($href == url()->current()) {
        $active = true;
    }
    $classes =
        $active ?? false
            ? 'flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
dark:text-gray-200 dark:hover:bg-gray-700 dark:bg-gray-700'
            : 'flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
dark:text-gray-200 dark:hover:bg-gray-700 ';
@endphp

@if ($role === 'admin')
    @if (auth()->user()->role === 'admin')
        <li>
            <a href="{{ $href }}" wire:navigate class="{{ $classes }}">
                <img src="{{ $image }}" alt=""
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                <span class="flex-1 ml-3 text-left whitespace-nowrap">
                    {{ $slot }}
                </span>

            </a>

        </li>
    @endif
@endif
@if ($role === 'editor')
    @if (auth()->user()->role === 'editor')
        <li>
            <a href="{{ $href }}" wire:navigate class="{{ $classes }}">
                <img src="{{ $image }}" alt=""
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                <span class="flex-1 ml-3 text-left whitespace-nowrap">
                    {{ $slot }}
                </span>

            </a>

        </li>
    @endif
@endif
@if ($role === 'user')
    <li>
        <a href="{{ $href }}" wire:navigate class="{{ $classes }}">
            <img src="{{ $image }}" alt=""
                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
            <span class="flex-1 ml-3 text-left whitespace-nowrap">
                {{ $slot }}
            </span>

        </a>

    </li>
@endif
