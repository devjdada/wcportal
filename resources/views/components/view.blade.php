<button
    {{ $attributes->merge(['class' => 'inline-flex items-center p-1.5 text-black dark:text-white text-sm font-medium rounded-md hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500']) }}>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-4 h-4 text-blue-500">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.284 1.082-.723 2.08-1.292 2.966A10.454 10.454 0 0112 19c-4.477 0-8.268-2.943-9.542-7z" />
    </svg>

    {{ $slot }}
</button>
