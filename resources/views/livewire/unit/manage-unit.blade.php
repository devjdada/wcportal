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
                    <x-button wire:click='sms'>
                        SMS
                    </x-button>
                    <x-button wire:click='smsv3'>
                        SMSV3
                    </x-button>
                    <x-button wire:click='smsv2'>
                        SMSV2
                    </x-button>
                    <x-button wire:click='create'>
                        Create Ubit
                    </x-button>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4 px-2 pt-3">
        @if($createUnit)
        <div class="rounded-lg  dark:bg-gray-800 text-left shadow-xl px-3 py-3 mx-3 my-3">
            <form wire:submit.prevent="save">
                <H1 class="pb-2 text-xl font-bold text-gray-800 dark:text-white">Create New Unit</H1>
                <div>
                    <x-label for="title">Title</x-label>
                    <x-input for="title" wire:model='unitForm.title' type="text" :error="$errors->first('title')">
                    </x-input>
                </div>
                <div>
                    <x-label for="email">Email</x-label>
                    <x-input for="email" wire:model='unitForm.email' type="email" :error="$errors->first('email')">
                    </x-input>
                </div>
                <div>
                    <x-label for="phone">Phone</x-label>
                    <x-input for="phone" wire:model='unitForm.phone' type="tel" :error="$errors->first('phone')">
                    </x-input>
                </div>
                <div>
                    <x-label for="about">About Unit</x-label>
                    <x-textarea for="about" wire:model='unitForm.about' :error="$errors->first('about')"></x-textarea>
                </div>
                {{-- <div>
                    <x-label for="about">Select Unit Cover Image</x-label>
                    <input type="file" class="form-control" id="about" wire:model='unitForm.cover_image_path' />
                </div> --}}
                <div>
                    <x-button>Save</x-button>
                </div>
            </form>

        </div>
        @endif
        @foreach ($units as $unit)
        <div id="{{ $unit->id }}" class="flex flex-col rounded-lg shadow-lg overflow-hidden ounded-lg dark:bg-gray-800 px-3 py-3 mx-3 my-3
            dark:text-white text-center">
            <h1 class="font-serif font-bold text-xl">{{ $unit->title }}</h1>
            <p>{{ $unit->email }}</p>
            <p>{{ $unit->phone }}</p>
            <p>{{ $unit->about }}</p>

            <div class="grid grid-cols-3 gap-4 items-center">
                @foreach ($unit->leaders as $leader)
                <div>
                    @foreach ($unitLeaders as $ul)
                    @if ($leader->user_id == $ul->user_id)
                    <img src="{{ $ul->profile_photo_url }}" alt="">
                    @endif
                    <h1>{{ $ul->name}}</h1>

                    @endforeach
                    {{ $leader->position }}
                </div>
                @endforeach
            </div>
            <div class="flex justify-end mt-8">
                <button wire:click='openNewLeaderDialog({{ $unit}})'
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    leader
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
                <button wire:click='edit({{ $unit}})'
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Edit
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                </button>
                <button wire:click='delete({{ $unit}})'
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Delete
                    <svg fill="#f33f3f" version="1.1" id="Layer_1" class="w-4 h-4 ml-2"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 290 290" xml:space="preserve">
                        <g id="XMLID_24_">
                            <g id="XMLID_29_">
                                <path
                                    d="M265,60h-30h-15V15c0-8.284-6.716-15-15-15H85c-8.284,0-15,6.716-15,15v45H55H25c-8.284,0-15,6.716-15,15s6.716,15,15,15
                    			h5.215H40h210h9.166H265c8.284,0,15-6.716,15-15S273.284,60,265,60z M190,60h-15h-60h-15V30h90V60z" />
                            </g>
                            <g id="XMLID_86_">
                                <path d="M40,275c0,8.284,6.716,15,15,15h180c8.284,0,15-6.716,15-15V120H40V275z" />
                            </g>
                        </g>
                    </svg>
                </button>

            </div>
        </div>
        @endforeach
    </div>
    <x-dialog wire:model="leaderDialog" :maxWidth="'sm'">
        <h1 class="text-xl font-bold">
            @if ($editMode)
            Edit
            @else
            New
            @endif Leader
        </h1>

        <x-validation-errors class="mb-4" />

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession
        <form wire:submit="saveLeader">
            <div class="mt-4">
                <x-label for="title" value="{{ __('Position') }}" />
                <x-select wire:model="ulForm.user_id" class="block mt-1 w-full">
                    <option value="">Select User</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} {{ $user->phone }}</option>
                    @endforeach
                </x-select>
            </div>
            <div class="mt-4">
                <x-label for="title" value="{{ __('Position') }}" />
                <x-select wire:model="ulForm.position" class="block mt-1 w-full">

                    @foreach ($positions as $position)
                    <option value="{{ $position }}">{{ $position }}</option>
                    @endforeach
                </x-select>
            </div>
            <div class="flex">
                <div class="mt-4 w-full">
                    <x-label for="phone" value="{{ __('From') }}" />
                    <x-input wire:model="ulForm.start" class="block mt-1 w-full" type="date" />
                </div>
                <div class="mt-4 w-full">
                    <x-label for="phone" value="{{ __('End') }}" />
                    <x-input wire:model="ulForm.end" class="block mt-1 w-full" type="date" />
                </div>
            </div>

            <div class="mt-4 mb-6">
                <x-label for="about" value="{{ __('About Unit') }}" />
                <x-textarea wire:model="ulForm.about" class="block mt-1 w-full">
                </x-textarea>
            </div>
            <x-button type="submit">
                @if ($editMode)
                Edit
                @else
                Create New
                @endif
            </x-button>
        </form>
    </x-dialog>
</div>
