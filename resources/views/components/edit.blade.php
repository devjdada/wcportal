<button
    {{ $attributes->merge(['class' => 'inline-flex items-center p-1.5 text-black dark:text-white text-sm font-medium rounded-md hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500']) }}>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="w-4 h-4 text-blue-500">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15.232 5.232l3.536 3.536m-2.036-1.5a1.5 1.5 0 112.121 2.121l-7.5 7.5a4.5 4.5 0 01-2.121 1.061l-3 0.5a0.75 0.75 0 01-0.878-0.878l0.5-3a4.5 4.5 0 011.061-2.121l7.5-7.5z" />
    </svg>
    {{ $slot }}
</button>
