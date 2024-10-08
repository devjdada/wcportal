<div>
    <livewire:soul.navigation />
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">New Convert</h1>
            </div>
            <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
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
                <x-button wire:click="openNewNCDialog">Post New Conver</x-button>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
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
                                    class="p-4 text-xs font-medium text-gray-500 uppercase text-lenc dark:text-gray-400">
                                    Contact
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-gray-500 uppercase text-lenc dark:text-gray-400">
                                    Date
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-gray-500 uppercase text-lenc dark:text-gray-400">
                                    Invittee
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-gray-500 uppercase text-lenc dark:text-gray-400">
                                    ID
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-gray-500 uppercase text-lenc dark:text-gray-400">
                                    Price
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-gray-500 uppercase text-lenc dark:text-gray-400">
                                    Discount
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-gray-500 uppercase text-lenc dark:text-gray-400">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @foreach ($new_converts as $nc)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-{{ $nc->id }}" aria-describedby="checkbox-1"
                                                type="checkbox"
                                                class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-{{ $nc->id }}" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td
                                        class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        <div class="text-base font-semibold text-gray-900 dark:text-white">
                                            {{ $nc->surname }} {{ $nc->firstname }}</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                            {{ $nc->phone }}
                                        </div>
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $nc->email }}</td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                        {{ $nc->prayer_point }}</td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @if ($nc->born_again == 1)
                                            Born Again
                                        @else
                                            Not born again
                                        @endif
                                    </td>
                                    <td
                                        class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        @if ($nc->winner)
                                            <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                {{ $nc->winner->name }}
                                            </div>
                                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                {{ $nc->winner->phone }}
                                            </div>
                                        @endif
                                    </td>
                                    <td
                                        class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        @if ($nc->posted)
                                            <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                {{ $nc->posted->name }}
                                            </div>
                                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                {{ $nc->posted->phone }}
                                            </div>
                                        @endif
                                    </td>

                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        <button type="button" id="updateProductButton"
                                            data-drawer-target="drawer-update-product-default"
                                            data-drawer-show="drawer-update-product-default"
                                            aria-controls="drawer-update-product-default"
                                            data-drawer-placement="right"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Update
                                        </button>
                                        <button type="button" id="deleteProductButton"
                                            data-drawer-target="drawer-delete-product-default"
                                            data-drawer-show="drawer-delete-product-default"
                                            aria-controls="drawer-delete-product-default"
                                            data-drawer-placement="right"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Delete item
                                        </button>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-dialog wire:model="delNCDialog" id="deleteNCDialog">
        <x-slot name="title">Delete Report</x-slot>
        <div class="">
            <h5 id="drawer-label"
                class="inline-flex items-center text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                Delete
                item
            </h5>

            <h3 class="mb-6 text-lg text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?
            </h3>
            <button wire:click="delete"
                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-900">
                Yes, I'm sure
            </button>
            <a href="#"
                class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                data-drawer-hide="drawer-delete-product-default">
                No, cancel
            </a>
        </div>
    </x-dialog>

    <x-dialog wire:model="newNCDialog" :maxWidth="'sm'">
        <x-slot name="title">
            @if ($editMode)
                Edit
            @else
                New
            @endif Homecell Report
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form wire:submit="save">
            <div class="grid grid-cols-2 gap-4 mb-8">
                <div class="mt-1">
                    <x-label for="title" value="{{ __('Surname') }}" />
                    <x-input wire:model="ncForm.surname" name="surname" class="block w-full mt-1" type="text" />
                </div>
                <div class="mt-1">
                    <x-label for="title" value="{{ __('Lastname') }}" />
                    <x-input wire:model="ncForm.firstname" name="lastname" class="block w-full mt-1"
                        type="text" />
                </div>
                <div class="mt-1">
                    <x-label value="{{ __('Phone') }}" />
                    <x-input readonly wire:model="ncForm.phone" class="block w-full mt-1" type="tel" />
                </div>
                <div class="mt-1">
                    <x-label value="{{ __('Email') }}" />
                    <x-input wire:model="ncForm.email" class="block w-full mt-1" type="email" />
                </div>
                <div class="col-span-2 mt-1 ">
                    <x-label value="{{ __('Address') }}" />
                    <x-textarea wire:model="ncForm.address" name="address" class="block w-full mt-1"></x-textarea>
                </div>
                <div class="mt-1">
                    <x-label value="{{ __('Gender') }}" />
                    <x-select wire:model="ncForm.gender" class="block w-full mt-1">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </x-select>
                </div>

                <div class="mt-1">
                    <x-label value="{{ __('Marital Status') }}" />
                    <x-select wire:model="ncForm.marital" class="block w-full mt-1">
                        <option value="single">single</option>
                        <option value="married">married</option>
                        <option value="single parent">single parent</option>
                        <option value="widow">widow</option>
                        <option value="widower">widower</option>
                    </x-select>
                </div>
                <div class="mt-1">
                    <x-label value="{{ __('Are You Born Again?') }}" />
                    <x-checkbox name="terms" wire:model="ncForm.born_again" />
                </div>
                <div class="mt-1">
                    <x-label value="{{ __('When?') }}" />
                    <x-input type="date" wire:model="ncForm.born_again_on" class="block w-full mt-1" />
                </div>

                <div class="col-span-2 mt-1 ">
                    <x-label value="{{ __('Address') }}" />
                    <x-textarea wire:model="ncForm.prayer_point" class="block w-full mt-1"></x-textarea>
                </div>
                <didv class="mt-4">
                    <x-button type="submit">
                        @if ($editMode)
                            Edit
                        @else
                            Save
                        @endif
                    </x-button>
                    <x-button wire:click="closeNewNCDialog" type="button"
                        class="dark:bg-red-600 hover:bg-red-800 dark:hover:bg-red-800">
                        Close
                    </x-button>
                </didv>
            </div>
        </form>
    </x-dialog>

    <x-dialog wire:model="lookNCDialog" :maxWidth="'sm'">
        <x-slot name="title">
            Check First Timer
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form wire:submit="lookup">
            <div class="flex flex-col gap-4 mb-8">
                <div class="mt-4">
                    <x-label for="title" value="{{ __('Contact Number') }}" />
                    <x-input wire:model="ncForm.phone" name="phone" class="block w-full mt-1" type="tel" />
                </div>

                <x-button type="submit">
                    look
                </x-button>
                </didv>
            </div>
        </form>
    </x-dialog>
</div>
