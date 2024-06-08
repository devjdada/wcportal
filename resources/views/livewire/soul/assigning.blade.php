<div>
    <div>
        <div
            class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">

                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Assigning Contact to
                        User</h1>
                </div>
                <div
                    class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <form class="sm:pr-3" action="#" method="GET">
                            <label for="products-search" class="sr-only">Search</label>
                            <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                                <input type="text" name="email" id="products-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search for products">
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
                    <x-button :disabled="$busy" wire:click='assign'>
                        @if ($busy)
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <rect fill="#fff" stroke="#fff" stroke-width="15" width="30" height="30" x="25" y="85">
                                <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                                    keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
                            </rect>
                            <rect fill="#fff" stroke="#fff" stroke-width="15" width="30" height="30" x="85" y="85">
                                <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                                    keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
                            </rect>
                            <rect fill="#fff" stroke="#fff" stroke-width="15" width="30" height="30" x="145" y="85">
                                <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;"
                                    keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
                            </rect>
                        </svg>
                        @else
                        Assign To
                        @endif

                    </x-button>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-flow-row-dense grid-cols-4 grid-rows-4 gap-1 mt-6 px-5">
        <div class="col-span-3">
            <div class="flex items-center p-3 mb-1 border border-gray-200  rounded-lg">
                <x-select wire:model.live='limitContactAssigned' class="w-20">
                    @for ($i = 0; $i < 20; $i++) <option value='{{ $i }}'>{{ $i }}</option>
                        @endfor
                </x-select>
            </div>
            <div class="grid grid-cols-4 gap-1 ">

                @foreach ($souls as $soul)
                @if ($soul->assigned->count() <= $limitContactAssigned) <a wire:click='selectContact({{ $soul->id }})'>
                    <div class="
                    @if (in_array($soul->id, $select_contact))
                        dark:border-green-700
                    @else
                        dark:border-gray-700
                    @endif
                    flex items-center p-3 mb-1 border border-gray-200  rounded-lg">

                        <div class="mr-4">
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">
                                {{ $soul->surname }} {{ $soul->firstname }}
                            </p>

                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $soul->phone }}</p>
                        </div>
                        <div class="flex items-center ml-auto">
                            <button type="button"
                                class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-200">
                                {{ $soul->assigned->count() }}
                            </button>
                            <button type="button"
                                class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-200">
                                {{ $soul->report->count() }}
                            </button>
                        </div>
                    </div>
                    </a>
                    @endif

                    @endforeach

            </div>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <div class="flex items-center p-3 mb-1 border border-gray-200  rounded-lg">
                <x-select wire:model.live='limitUserAssigned' class="w-20">
                    @for ($i = 0; $i < 100; $i++) <option value='{{ $i }}'>{{ $i }}</option>
                        @endfor
                </x-select>
            </div>
            <div class="grid grid-rows-6 gap-1">

                @foreach ($users as $user)
                @if ($user->assigned->count() <= $limitUserAssigned) <a wire:click='selectUser({{ $user->id }})'>
                    <div class="flex items-center p-3 mb-1 border border-gray-200 rounded-lg
                        @if (in_array($user->id, $select_user))
                                dark:border-red-700
                                @else
                                dark:border-gray-700
                            @endif
                        ">
                        <div
                            class="flex items-center justify-center w-10 h-10 mr-3 bg-teal-100 rounded-lg dark:bg-teal-900">

                            <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}"
                                alt="{{ $user->name }}" />
                        </div>
                        <div class="mr-4">
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">
                                {{ $user->name }}
                            </p>

                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $user->phone }}</p>
                        </div>
                        <div class="flex items-center ml-auto">
                            <button type="button"
                                class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-200">
                                {{ $user->assigned->count() }} Assigned
                            </button>
                            <button type="button"
                                class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-200">
                                {{ $user->report->count() }} Reports
                            </button>
                        </div>
                    </div>
                    </a>
                    @endif

                    @endforeach

            </div>
        </div>
    </div>

</div>