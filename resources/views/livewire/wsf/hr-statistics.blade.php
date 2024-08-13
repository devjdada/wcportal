<div class="pt-4 mx-4">
    <livewire:wsf.navigation />
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="#"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">E-commerce</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                    aria-current="page">Products</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All {{ $week }}</h1>
            </div>
            <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                <div class="flex items-center mb-4 sm:mb-0">
                    <form class="sm:pr-3">
                        <div class="flex gap-7 ">
                            <div class="w-48 mt-1 mr-2  sm:w-60 xl:w-94">
                                <select wire:model.live="type"
                                    class='bg-gray-50 border  border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500',>
                                    <option value="date">date</option>
                                    <option value="month">month</option>
                                    <option value="year">year</option>
                                </select>
                            </div>

                            <div class="w-48 mt-1 mr-2  sm:w-64 xl:w-80">
                                <x-input type="{{ $type }}" wire:model.live="week" />
                            </div>
                            <div class="w-48 mt-1 mr-2  sm:w-64 xl:w-96">
                                <select wire:model.live="province"
                                    class='bg-gray-50 border  border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500',>
                                    @foreach ($provinces as $pr)
                                        <option value="{{ $pr->id }}">{{ $pr->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="w-48 mt-1 mr-2  sm:w-64 xl:w-96">
                                <x-input type="date" wire:model.live="week" />
                            </div>
                        </div>

                    </form>
                    <div class="flex items-center w-full sm:justify-end">
                        <div class="flex pl-2 space-x-1">
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <x-button wire:click="openNewReportModal">
                    Post Report
                </x-button>
            </div>
        </div>
    </div>
    <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-6 2xl:grid-cols-8">
        <div
            class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                    Total Attendance
                </h3>
                <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                    {{ $total }}
                </span>
                <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">

                    As at {{ $week }}
                </p>
            </div>

        </div>
        <div
            class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                    Male
                </h3>
                <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">
                    {{ $male }}
                </span>
                <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">

                    As at {{ $week }}
                </p>
            </div>

        </div>
        <div
            class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Awainting Report</h3>
                <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">
                    {{ $total }}
                </span>
                <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">

                    {{-- As at {{ $week }} --}}
                </p>
            </div>

        </div>
        <div
            class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Awainting Report</h3>
                <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">
                    {{ count($reports) }}
                </span>
                <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">

                    {{-- As at {{ $week }} --}}
                </p>
            </div>

        </div>
        <div
            class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Awainting Report</h3>
                <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">
                    {{-- {{ count($yetHomecell) }} --}}
                </span>
                <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">

                    {{-- As at {{ $week }} --}}
                </p>
            </div>

        </div>
        <div
            class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="w-full">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Awainting Report</h3>
                <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">
                    {{-- {{ count($yetHomecell) }} --}}
                </span>
                <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">

                    {{-- As at {{ $week }} --}}
                </p>
            </div>

        </div>

    </div>
    <div class="mt-4">
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="items-center justify-between pb-4 border-b border-gray-200 sm:flex dark:border-gray-700">
                <div class="w-full mb-4 sm:mb-0">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Sales by category</h3>
                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop
                        PC</span>
                    <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                        <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                            2.5%
                        </span>
                        Since last month
                    </p>
                </div>
                <div class="w-full max-w-lg">
                    <div date-rangepicker class="grid items-center grid-cols-2 gap-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                    </path>
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                    </path>
                                </svg>
                            </div>
                            <input name="start" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="From">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                    </path>
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                    </path>
                                </svg>
                            </div>
                            <input name="end" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="To">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full" id="sales-by-category"></div>
            <div class="flex items-center justify-between pt-4 lg:justify-evenly sm:pt-6">

                <div>

                    <h3 class="text-gray-500 dark:text-gray-400">
                        Total Attendance
                    </h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        {{ $total }}
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        {{ $week }}
                    </p>
                </div>
                <div>

                    <h3 class="text-gray-500 dark:text-gray-400">
                        Male
                    </h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        {{ $male }}
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        {{ $week }}
                    </p>
                </div>
                <div>

                    <h3 class="text-gray-500 dark:text-gray-400">
                        Female
                    </h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        {{ $female }}
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        {{ $week }}
                    </p>
                </div>
                <div>

                    <h3 class="text-gray-500 dark:text-gray-400">
                        Children
                    </h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        {{ $children }}
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        {{ $week }}
                    </p>
                </div>
                <div>

                    <h3 class="text-gray-500 dark:text-gray-400">
                        New Convert
                    </h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        {{ $nc }}
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        {{ $week }}
                    </p>
                </div>
                <div>

                    <h3 class="text-gray-500 dark:text-gray-400">
                        First Timer
                    </h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        {{ $ft }}
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        {{ $week }}
                    </p>
                </div>
                <div>

                    <h3 class="text-gray-500 dark:text-gray-400">Desktop</h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        234k
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        vs last month
                    </p>
                </div>
            </div>
        </div>


    </div>
    <div class="grid grid-cols-3 gap-4 mt-4">

        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                </div>
                <a href="#"
                    class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                    Full report
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <div id="traffic-by-device"></div>

        </div>

        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                </div>
                <a href="#"
                    class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                    Full report
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <div id="traffic-by-device"></div>

        </div>

        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                </div>
                <a href="#"
                    class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                    Full report
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <div id="traffic-by-device"></div>

        </div>

        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                </div>
                <a href="#"
                    class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                    Full report
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <div id="traffic-by-device"></div>

        </div>

        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                </div>
                <a href="#"
                    class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                    Full report
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <div id="traffic-by-device"></div>

        </div>

        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                </div>
                <a href="#"
                    class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                    Full report
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            <div id="traffic-by-device"></div>

        </div>
    </div>
</div>
@push('scripts')
    <script>
        (function() {
            const options = {
                colors: ["#1A56DB", "#FDBA8C"],
                series: [{
                        name: "Desktop PC",
                        color: "#1A56DB",
                        data: [{
                                x: "01 Feb",
                                y: 170
                            },
                            {
                                x: "02 Feb",
                                y: 180
                            },
                            {
                                x: "03 Feb",
                                y: 164
                            },
                            {
                                x: "04 Feb",
                                y: 145
                            },
                            {
                                x: "05 Feb",
                                y: 194
                            },
                            {
                                x: "06 Feb",
                                y: 170
                            },
                            {
                                x: "07 Feb",
                                y: 155
                            },
                        ],
                    },
                    {
                        name: "Phones",
                        color: "#FDBA8C",
                        data: [{
                                x: "01 Feb",
                                y: 120
                            },
                            {
                                x: "02 Feb",
                                y: 294
                            },
                            {
                                x: "03 Feb",
                                y: 167
                            },
                            {
                                x: "04 Feb",
                                y: 179
                            },
                            {
                                x: "05 Feb",
                                y: 245
                            },
                            {
                                x: "06 Feb",
                                y: 182
                            },
                            {
                                x: "07 Feb",
                                y: 143
                            },
                        ],
                    },
                    {
                        name: "Gaming/Console",
                        color: "#17B0BD",
                        data: [{
                                x: "01 Feb",
                                y: 220
                            },
                            {
                                x: "02 Feb",
                                y: 194
                            },
                            {
                                x: "03 Feb",
                                y: 217
                            },
                            {
                                x: "04 Feb",
                                y: 279
                            },
                            {
                                x: "05 Feb",
                                y: 215
                            },
                            {
                                x: "06 Feb",
                                y: 263
                            },
                            {
                                x: "07 Feb",
                                y: 183
                            },
                        ],
                    },
                ],
                chart: {
                    type: "bar",
                    height: "420px",
                    fontFamily: "Inter, sans-serif",
                    foreColor: "#4B5563",
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        columnWidth: "90%",
                        borderRadius: 3,
                    },
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontSize: "14px",
                        fontFamily: "Inter, sans-serif",
                    },
                },
                states: {
                    hover: {
                        filter: {
                            type: "darken",
                            value: 1,
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 5,
                    colors: ["transparent"],
                },
                grid: {
                    show: false,
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    floating: false,
                    labels: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    opacity: 1,
                },
            };

            const chart = new ApexCharts(
                document.getElementById("sales-by-category"),
                options
            );
            chart.render();
        }());
    </script>
@endpush
