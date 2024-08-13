<div>
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">

                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Manage Ordained Workers</h1>
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('dashboard') }}"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Dashboard
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
                                <a href="{{ route('ordained-worker') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Ordained
                                    Worker</a>
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
                                <a href="{{ route('posting-location') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    Posting Location
                                </a>
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
                                <a href="{{ route('ow-posting') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    OW Posting
                                </a>
                            </div>
                        </li>

                    </ol>
                </nav>
            </div>

        </div>
    </div>

    <div class="grid gap-4 px-4 xl:grid-cols-2 2xl:grid-cols-3">
        <div class="col-span-2 overflow-x-auto shadow-md sm:rounded-lg">
            <div
                class="flex flex-wrap items-center justify-between py-4 space-y-4 bg-white flex-column md:flex-row md:space-y-0 dark:bg-gray-900">
                <div class="flex gap-2z">
                    <x-btn wire:click='openAutoGen'>
                        Gen
                    </x-btn>
                    <x-select wire:model.live='numPerPosition'>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="60">60</option>
                        <option value="80">80</option>
                        <option value="100">100</option>
                    </x-select>
                    <x-select wire:model.live='dateFilter'>
                        <option value=""></option>

                        @foreach ($datesArray as $d)
                            <option value="{{ $d['date'] }}">{{ $d['day'] }} {{ $d['date'] }}</option>
                        @endforeach
                    </x-select>
                    <x-select id="filterWing" wire:model.live="filterWing">
                        <option value="">Select Wing</option>
                        <option value="Wing A">Wing A</option>
                        <option value="Wing B">Wing B</option>
                        <option value="Wing C">Wing C</option>
                        <option value="Wing D">Wing D</option>
                    </x-select>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none rtl:inset-r-0 start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <x-input type="text" wire:model.live='searchPosition' placeholder="Posting"></x-input>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Wing
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tag
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Position
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Service
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postings as $posting)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600 dark:border-gray-700">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-{{ $posting->id }}" wire:model.live='positionChecked[]'
                                        type="checkbox" value="{{ $posting->id }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-{{ $posting->id }}" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                @if ($posting->user)
                                    <img class="w-10 h-10 rounded-full" src="{{ $posting->user->profile_photo_url }}"
                                        alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">{{ $posting->user->name }}</div>
                                        <div class="font-normal text-gray-500">{{ $posting->user->email }}</div>
                                    </div>
                                @else
                                    Not Posted Yet
                                @endif
                            </th>
                            <td class="px-6 py-4">

                                {{ $posting->wing }}



                            </td>
                            <td class="px-6 py-4">
                                {{ $posting->tag }}



                            </td>
                            <td class="px-6 py-4">
                                {{ $posting->location }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    {{ $posting->service }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    {{ $posting->for }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <!-- Modal toggle -->
                                {{-- <a href="#" type="button" data-modal-target="editUserModal"
                                    data-modal-show="editUserModal"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a> --}}
                                <x-add wire:click='selectPosition({{ $posting->id }})'></x-add>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mx-6 my-4">
                {{ $postings->links() }}
            </div>
        </div>

    </div>


    <x-dialog :close="false" wire:model="autoPostOwDialog" :maxWidth="'sm'" :title="'Aauto Post Ordained Worker'">


        <!-- Modal body -->

        <div class="space-y-6">
            @session('status')
                <div class="mb-4 text-sm font-medium text-green-600">

                </div>
            @endsession
            <x-validation-errors class="mb-4" />
            <form wire:submit="autoPost">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6">
                        <label for="autoPostWing"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Wings
                        </label>
                        <x-select id="autoPostWing" wire:model="autoPostWing">
                            <option value="">Select Wing</option>
                            <option value="Wing A">Wing A</option>
                            <option value="Wing B">Wing B</option>
                            <option value="Wing C">Wing C</option>
                            <option value="Wing D">Wing D</option>
                        </x-select>

                    </div>
                    <div class="col-span-6">
                        <label for="autoPostMonth"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Month
                        </label>
                        <x-input id="autoPostMonth" wire:change='testFn' type='month'
                            wire:model.live="autoPostMonth" />
                    </div>
                    <div class="col-span-6">
                        <label for="autoPostDate"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Date {{ $autoPostMonth }}
                        </label>
                        <x-select wire:model='autoPostDate'>
                            <option value=""></option>

                            @foreach ($autoPostDateArray as $d)
                                <option value="{{ $d['date'] }}">{{ $d['day'] }} {{ $d['date'] }}</option>
                            @endforeach
                        </x-select>
                    </div>



                </div>
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <x-button type="submit">
                        Save New Position
                    </x-button>
                </div>
            </form>
        </div>
        <!-- Modal footer -->

    </x-dialog>
</div>
