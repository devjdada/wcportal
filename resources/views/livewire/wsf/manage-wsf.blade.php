<div class="px-4 pt-6">
    <livewire:wsf.navigation />
    <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 dark:text-white">
            <div class="flex justify-between w-full">
                <div class="text-2xl font-bold">Province </div>

                <x-add wire:click="openAddProvinceModal"></x-add>
            </div>
            <div class="w-full">

                @foreach ($provinces as $province)
                    <div wire:click='viewHomecell({{ $province }})'
                        class="flex justify-between p-1 pt-1 hover:bg-gray-300 dark:hover:bg-gray-700">

                        <div class="flex flex-col cursor-pointer hover:text-blue"
                            wire:click="viewDistrict({{ $province }})">
                            <h1 class="text-base ">{{ $province->title }}</h1>
                            <span class="text-sm dark:text-gray-400">{{ $province->phone }}</span>
                        </div>
                        <div class="flex">
                            <x-del wire:click="delProvince({{ $province }})"></x-del>
                            <x-edit wire:click="editProvince({{ $province }})"></x-edit>

                            <x-add wire:click="openAddDistrictModal({{ $province }})"></x-add>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 dark:text-white">


            <div class="flex justify-between w-full">
                <div class="text-2xl font-bold">
                    {{-- @if (count($districts) != 0)
                    {{ $districts->title }}
                    @else --}}
                    District
                    {{-- @endif --}}
                </div>
            </div>

            <div class="w-full">
                @if (count($districts) != 0)
                    @foreach ($districts as $district)
                        <div class="flex justify-between mt-2 hover:bg-gray-300 dark:hover:bg-gray-700">

                            <div class="flex flex-col cursor-pointer" wire:click="viewHomecell({{ $district }})">
                                <h1 class="text-base ">{{ $district->title }} </h1>
                                <span class="text-sm dark:text-gray-400">{{ $district->phone }}</span>
                            </div>
                            <div class="flex">
                                <x-del wire:click="delDistrict({{ $district }})"></x-del>
                                <x-edit wire:click="editDistrict({{ $district }})"></x-edit>
                                <x-add wire:click="openAddHomecellModal({{ $district }})"></x-add>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 dark:text-white">
            <div class="flex justify-between w-full">
                <div class="text-xl font-bold">

                    Homecell

                </div>
            </div>
            <div class="w-full">
                @if (count($homecells) != 0)
                    @foreach ($homecells as $homecell)
                        <div class="flex justify-between mt-2 hover:bg-gray-300 dark:hover:bg-gray-700">

                            <div class="flex flex-col">
                                <h1 class="text-base ">{{ $homecell->title }}</h1>
                                <span class="text-sm dark:text-gray-400">{{ $homecell->phone }}</span>
                            </div>
                            <div class="flex">
                                <x-del wire:click="delHomecell({{ $homecell }})"></x-del>
                                <x-edit wire:click="editHomecell({{ $homecell }})"></x-edit>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <x-dialog wire:model="provinceModal" :maxWidth="'sm'">
        <x-slot name="title">
            @if ($editMode)
                Edit
            @else
                Create New
            @endif

            Province
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form wire:submit="saveProvince">
            <div class="mt-4">
                <x-label for="title" value="{{ __('Name of Province') }}" />
                <x-input wire:model="provinceForm.title" class="block w-full mt-1" type="text" />
            </div>
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input wire:model="provinceForm.phone" class="block w-full mt-1" type="tel" />
            </div>
            <div class="mt-4">
                <x-label for="About" value="{{ __('About') }}" />
                <x-textarea wire:model="provinceForm.about" class="block w-full mt-1">
                </x-textarea>
            </div>
            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-textarea wire:model="provinceForm.address" class="block w-full mt-1">
                </x-textarea>
            </div>
            <x-button type="submit">
                @if ($editMode)
                    Edit
                @else
                    Save
                @endif
            </x-button>
        </form>
    </x-dialog>

    <x-dialog wire:model="districtModal" :maxWidth="'sm'">
        <x-slot name="title">
            @if ($editMode)
                Edit
            @else
                Create New
            @endif District
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form wire:submit="saveDistrict">
            <div class="mt-4">
                <x-label for="title" value="{{ __('Name of Province') }}" />
                <x-input wire:model="districtForm.title" class="block w-full mt-1" type="text" />
            </div>
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input wire:model="districtForm.phone" class="block w-full mt-1" type="tel" />
            </div>
            <div class="mt-4">
                <x-label for="About" value="{{ __('About') }}" />
                <x-textarea wire:model="districtForm.about" class="block w-full mt-1">
                </x-textarea>
            </div>
            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-textarea wire:model="districtForm.address" class="block w-full mt-1">
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

    <x-dialog wire:model="homecellModal" :maxWidth="'sm'">
        <x-slot name="title">
            @if ($editMode)
                Edit
            @else
                Create New
            @endif Homecell
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form wire:submit="saveHomecell">
            <div class="mt-4">
                <x-label for="title" value="{{ __('Name of Homecell') }}" />
                <x-input wire:model="homecellForm.title" class="block w-full mt-1" type="text" />
            </div>
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input wire:model="homecellForm.phone" class="block w-full mt-1" type="tel" />
            </div>
            <div class="mt-4">
                <x-label for="About" value="{{ __('About') }}" />
                <x-textarea wire:model="homecellForm.about" class="block w-full mt-1">
                </x-textarea>
            </div>
            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-textarea wire:model="homecellForm.address" class="block w-full mt-1">
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
