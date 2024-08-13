<button
    {{ $attributes->merge(['class' => 'inline-flex items-center p-1.5 text-black dark:text-white text-sm font-medium rounded-md hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500']) }}>
    <img src="{{ asset('static/icons/add.svg') }}" class="w-5 h-5 text-white ">
    {{ $slot }}
</button>
