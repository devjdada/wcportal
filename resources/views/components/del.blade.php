<button
    {{ $attributes->merge(['class' => 'inline-flex items-center p-1.5 text-black dark:text-white text-sm font-medium rounded-md hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500']) }}>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="w-4 h-4 text-red-500">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4a2 2 0 012 2h4a1 1 0 110 2H4a1 1 0 110-2h4a2 2 0 012-2z" />
    </svg>

    {{ $slot }}
</button>
