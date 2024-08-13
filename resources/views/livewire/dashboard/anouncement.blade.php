<div
    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:border-gray-700 dark:bg-gray-800 xl:mb-0">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Anouncement</h3>
        <a href="#"
            class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
            View all
        </a>
    </div>
    <!-- Chat -->
    <div class="overflow-y-auto lg:max-h-[60rem] 2xl:max-h-fit">



        @foreach ($ans as $an)
            <article class="mb-8">
                <footer class="flex items-center justify-between mb-1">
                    <div class="flex items-center">
                        <p class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                            {{-- <img class="w-6 h-6 mr-2 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese avatar"> --}}
                            {{ $an->title }}
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            <time pubdate datetime="2022-02-08" title="{{ $an->created_at }}">
                                {{ date('l jS \of F Y', strtotime($an->created_at)) }}
                            </time>
                        </p>
                    </div>
                    <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:ring-gray-600"
                        type="button">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                            </path>
                        </svg>
                        {{-- <span class="sr-only">Comment settings</span> --}}
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownComment3"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                            </li>
                        </ul>
                    </div>
                </footer>
                <div
                    class="p-8 mb-1 @if ($an->orientation === 'S' || $an->orientation === 'P') md:flex gap-3 @endif  bg-slate-100 rounded-xl md:p-0 dark:bg-slate-800">
                    @if ($an->image)
                        <img class="w-full h-24 mx-auto rounded-sm md:w-48 md:h-auto md:rounded-sm"
                            src="{{ $an->image }}" alt="">
                    @endif
                    <p class="mb-1 text-gray-900 dark:text-white">
                        {{ $an->text }}
                    </p>
                </div>
                @if ($an->fileDoc)
                    <p class="mb-1 text-gray-900 dark:text-white">Downloadable. </p>
                    <div class="items-center 2xl:space-x-4 2xl:flex">
                        <!-- Item -->
                        <div class="flex items-center p-3 mb-2 border border-gray-200 rounded-lg dark:border-gray-700">
                            <div
                                class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-primary-100 dark:bg-primary-900">
                                <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                    fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z">
                                    </path>
                                    <path
                                        d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z">
                                    </path>
                                </svg>
                            </div>
                            <div class="mr-4">
                                <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ $an->fileName }}
                                </p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">{{ $an->fileType }},
                                    {{-- {{ Storage::size($an->fileDoc) }} --}}
                                </p>
                            </div>
                            <x-button wire:click='downloadFile({{ $an }})'>download</x-button>
                            <div class="flex items-center ml-auto">
                                <a wire:navigate href="{{ $an->fileDoc }}" class="p-2 rounded hover:bg-orange-500">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Download</span>
                                </a>

                            </div>
                        </div>

                    </div>
                @endif


            </article>
        @endforeach

        @can('isAdmin')
            <form wire:submit.prevent="save">
                <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <input for="title" placeholder="Title" wire:model='anForm.title'
                            class="w-full px-0 mb-4 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" />
                        <textarea id="comment" rows="8" wire:model='anForm.text'
                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write Anouncement Here" required></textarea>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Save
                        </button>
                        <div class="flex pl-0 space-x-1 sm:pl-2">
                            <button type="button" wire:click='openImageFileUploadDialog'
                                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Attach file</span>
                            </button>


                        </div>
                    </div>
                </div>
            </form>
        @endcan
    </div>

    <x-dialog :close="false" wire:model="anImageFileUploadDialog" :maxWidth="'md'" :title="'Anouncemet Image/File Upload'">


        <!-- Modal body -->

        <div class="space-y-6">
            @session('status')
                <div class="mb-4 text-sm font-medium text-green-600">

                </div>
            @endsession
            <x-validation-errors class="mb-4" />
            <form wire:submit="checkOrientation">
                <div class="grid grid-cols-6 gap-6 px-8">

                    <div class="col-span-3">
                        <label for="image"
                            class="block w-full h-full py-8 mb-2 cursor-pointer outline outline-1 outline-slate-500 bg-slate-400">
                            <div class="flex flex-col items-center justify-center w-full h-full gap-4 ">
                                <svg class="-ml-0.5 mr-1.5 h-10 w-10 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                                    <path
                                        d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                                </svg>
                                <small>
                                    select image
                                </small>
                            </div>
                        </label>
                        <x-input id="image" type='file' wire:model="image" class="hidden" />
                    </div>
                    <div class="col-span-3">
                        <label for="fileDoc"
                            class="block w-full h-full py-8 mb-2 cursor-pointer outline outline-4 bg-slate-400">
                            <div class="flex flex-col items-center justify-center w-full h-full gap-4 ">
                                <svg class="-ml-0.5 mr-1.5 h-10 w-10 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                                    <path
                                        d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                                </svg>
                                <small>
                                    select file
                                </small>
                            </div>
                        </label>
                        <x-input id="fileDoc" type='file' wire:model="fileDoc" class="hidden" />



                    </div>
                    <x-input id="fileName" type='text' placeholder='File Name' wire:model="anForm.fileName"
                        class="block w-full col-span-6" />

                </div>
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <x-button type="submit">
                        Upload
                    </x-button>
                </div>
            </form>
        </div>
        <!-- Modal footer -->

    </x-dialog>
</div>
