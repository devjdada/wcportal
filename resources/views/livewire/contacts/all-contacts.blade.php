<div>
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
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Users</a>
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
                                    aria-current="page">List</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All users</h1>
            </div>
            <div class="sm:flex">
                <div class="flex items-start space-x-2 w-30 sm:space-x-3">
                    <x-label>Per Page</x-label>
                    <select wire:model.live="numPerPage"
                        class="dark:bg-gray-800 dark:text-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form class="lg:pr-3" action="#" method="GET">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" wire:model.live.debounce.300ms="search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search for users">
                        </div>
                    </form>
                    <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
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

                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <button wire:click='openNewContactDialog'
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        New Contact
                    </button>

                    <a href="#"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Export
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="px-5 mt-4">
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">

                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox"
                                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Name
                                </th>

                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Location
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Prayer Point
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Status
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                            @foreach ($myContacts as $contact)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-{{ $contact->id }}" aria-describedby="checkbox-1"
                                                type="checkbox"
                                                class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-{{ $contact->id }}" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">

                                        <div class="text-sm font-normal text-gray-500 dark:text-white">
                                            <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                {{ $contact->surname }} {{ $contact->firstname }} </div>
                                            <div
                                                class="overflow-hidden text-sm font-normal text-gray-500 dark:text-white">
                                                {{ $contact->phone }}</div>
                                        </div>
                                    </td>
                                    <td
                                        class="max-w-sm p-4 text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                        {{ $contact->location }}</td>

                                    <td
                                        class="p-4 overflow-hidden text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $contact->prayer_point }}</td>
                                    <td
                                        class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            {{-- {{ if eq .status "Active" }} <div
                                            class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> {{ else }}
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> {{ end }} {{
                                        .status }} --}}
                                        </div>
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        <x-edit type="button" wire:click="edit({{ $contact }})">
                                        </x-edit>
                                        <x-del type="button" wire:click="delete({{ $contact }})">
                                        </x-del>
                                        <x-edit type="button" wire:click="report({{ $contact }})">
                                        </x-edit>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-3 py-4">

                <div class="">
                    {{ $myContacts->links() }}
                </div>
            </div>
        </div>


    </div>
    <x-dialog wire:model="ncDialog" :title="'Contact'" :maxWidth="'sm'">

        <div class="flex items-start justify-between border-b rounded-t dark:border-gray-700">
            <h3 class="text-xl font-semibold dark:text-white">

                @if ($editMode)
                    Edit Contact
                @else
                    Add New Contact
                @endif
            </h3>
            {{-- <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                x-on:click="$dispatch('close-add-my-contact')">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button> --}}
        </div>
        <div class="space-y-6">
            @session('status')
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ $value }}
                </div>
            @endsession
            <x-validation-errors class="mb-4" />
            <form wire:submit="save">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <x-label for="first-name">First Name</x-label>
                        <x-input type="text" name="lastname" wire:model="contactForm.firstname" id="first-name">
                        </x-input>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-label>Surname</x-label>
                        <x-input type="text" name="surname" wire:model="contactForm.surname"></x-input>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-label>Phone Number</x-label>
                        <x-input type="tel" name="phone" wire:model="contactForm.phone"></x-input>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-label>Location</x-label>
                        <x-input type="text" name="location" wire:model="contactForm.location">
                        </x-input>
                    </div>


                    <div class="col-span-6">
                        <label for="biography"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ptrayer
                            Request</label>
                        <x-textarea id="prayer_point" wire:model="contactForm.prayer_point" rows="4">
                        </x-textarea>
                    </div>
                </div>
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <x-button type="submit">
                        @if ($editMode)
                            Edit Contact
                        @else
                            Add New Contact
                        @endif
                    </x-button>
                </div>
            </form>
        </div>
    </x-dialog>
    <x-dialog wire:model="reportDialog" :title="'Report'" :maxWidth="'md'">

        <div class="flex items-start justify-between border-b rounded-t dark:border-gray-700">
            <h3 class="text-xl font-semibold dark:text-white">
                Soul Report
            </h3>
        </div>
        <!-- Modal body -->

        <div class="space-y-6">
            @session('status')
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ $value }}
                </div>
            @endsession
            <x-validation-errors class="mb-4" />
            <form wire:submit="saveReport">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <label for="biography" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Report</label>
                        <x-textarea id="prayer_point" wire:model="srForm.report" rows="4">
                        </x-textarea>
                    </div>
                    <div class="col-span-6">
                        <label for="biography" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Prayer Request</label>
                        <x-textarea id="prayer_point" wire:model="srForm.prayer" rows="4">
                        </x-textarea>
                    </div>
                    <div class="col-span-3">
                        <x-checkbox id="born" wire:model='srForm.born_again' />
                        <label for="born" class="mb-2 mr-4 text-sm font-medium text-gray-900 dark:text-white">Born
                            Again</label>
                    </div>

                    <div class="col-span-3">
                        <x-checkbox id="found" wire:model='srForm.foundation_class' />
                        <label for="found"
                            class="mb-2 mr-4 text-sm font-medium text-gray-900 dark:text-white">Attend
                            Foundation
                            class</label>
                    </div>
                    <div class="col-span-3">
                        <x-checkbox id="worship" wire:model='srForm.last_service' />
                        <label for="worship"
                            class="mb-2 mr-4 text-sm font-medium text-gray-900 dark:text-white">Worship With
                            Us</label>
                    </div>
                    <div class="col-span-3">
                        <x-checkbox id="unit" wire:model='srForm.unit' />
                        <label for="unit" class="mb-2 mr-4 text-sm font-medium text-gray-900 dark:text-white">
                            Member of Unit
                        </label>
                    </div>
                    <div class="col-span-3">
                        <x-checkbox id="bapt" wire:model='srForm.baptised' />
                        <label for="bapt" class="mb-2 mr-4 text-sm font-medium text-gray-900 dark:text-white">
                            Baptised
                        </label>
                    </div>
                    <div class="col-span-3">
                        <x-checkbox id="home" wire:model='srForm.homecell' />
                        <label for="home"
                            class="mb-2 mr-4 text-sm font-medium text-gray-900 dark:text-white">Member of
                            Homecell</label>
                    </div>

                </div>
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <x-button type="submit">
                        Save Report
                    </x-button>
                </div>
            </form>
        </div>
        <!-- Modal footer -->

    </x-dialog>

</div>
