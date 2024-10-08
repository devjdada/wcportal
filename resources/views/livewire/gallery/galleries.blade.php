<div>
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">

                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All users</h1>
            </div>
            <div class="sm:flex">

                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">

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
                    <button wire:click='openNewGalleryModal'
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        New Gallery
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
    <div class="grid grid-cols-3 gap-6 dark:text-white ">
        @foreach ($galleries as $gallery)
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex items-center ">
                    <div class="">
                        <img class="" src="{{ $gallery->image }}" alt="{{ $gallery->title }}">

                        <div class="flex justify-between p-6">
                            <div class="">
                                <button wire:click='openAddMoreImageModal({{ $gallery->id }})'
                                    class="inline-flex items-center justify-center w-10 h-10 text-sm font-medium text-white rounded-full bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <button wire:click='deleteGallery({{ $gallery->id }})'
                                    class="inline-flex items-center justify-center w-10 h-10 text-sm font-medium text-white bg-red-600 rounded-full hover:bg-red-700 focus:ring-4 focus:ring-primary-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <button wire:click='openGalleryModal({{ $gallery->id }})'
                                    class="inline-flex items-center justify-center w-10 h-10 text-sm font-medium text-white bg-green-600 rounded-full hover:bg-green-700 focus:ring-4 focus:ring-primary-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>

                            </div>
                            <div class="">
                                {{ count($gallery->images) }} images
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



    <x-dialog wire:model="newGalleryModal" :title="'New Gallery'" :maxWidth="'md'">



        <div class="space-y-6">
            @session('status')
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ $value }}
                </div>
            @endsession
            <x-validation-errors class="mb-4" />
            <form wire:submit="saveGallery">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <label for="biography" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Description</label>
                        <x-textarea id="prayer_point" wire:model="description" rows="4">
                        </x-textarea>
                    </div>
                    <div class="col-span-6">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Title
                        </label>
                        <x-input id="title" wire:model="title" />
                    </div>
                    <div class="col-span-3">
                        <label for="image" class="mb-2 mr-4 text-sm font-medium text-gray-900 dark:text-white">Born
                            Image</label>
                        <x-input id="image" type='file' wire:model="image" />
                    </div>
                </div>
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <x-button type="submit">
                        Save Gallery
                    </x-button>
                </div>
            </form>
        </div>
        <!-- Modal footer -->

    </x-dialog>
    <x-dialog wire:model="addMoreImageModal" :title="'Adding More Images to Gallery'" :maxWidth="'md'">



        <div class="space-y-6">
            @session('status')
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ $value }}
                </div>
            @endsession
            <x-validation-errors class="mb-4" />
            <form wire:submit="saveMoreImage">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-3">
                        <label for="photos" class="mb-2 mr-4 text-sm font-medium text-gray-900 dark:text-white">Born
                            Image</label>
                        <x-input id="photos" type='file' wire:model="photos" multiple />
                    </div>
                </div>
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <x-button type="submit">
                        Upload Images
                    </x-button>
                </div>
            </form>
        </div>
        <!-- Modal footer -->

    </x-dialog>
</div>
