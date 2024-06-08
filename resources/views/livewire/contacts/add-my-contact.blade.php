<!-- Add User Modal -->

<div class="rounded m-auto   z-50 items-center justify-center  overflow-x-hidden overflow-y-auto md:inset-0  sm:h-full">
    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                <h3 class="text-xl font-semibold dark:text-white">
                    Add New Contact
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                    x-on:click="$dispatch('close-add-my-contact')">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->

            <div class="p-6 space-y-6">
                @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession
                <x-validation-errors class="mb-4" />
                <form wire:submit="save">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="first-name">First Name</x-label>
                            <x-input type="text" wire:model="contactForm.firstname" id="first-name"></x-input>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label>Surname</x-label>
                            <x-input type="text" wire:model="contactForm.surname"></x-input>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label>Phone Number</x-label>
                            <x-input type="tel" wire:model="contactForm.phone"></x-input>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label>Location</x-label>
                            <x-input type="text" wire:model="contactForm.location"></x-input>
                        </div>


                        <div class="col-span-6">
                            <label for="biography"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ptrayer
                                Request</label>
                            <x-textarea id="prayer_point" wire:model="contactForm.prayer_point"
                                rows="4"></x-textarea>
                        </div>
                    </div>
                    <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <x-button type="submit">Add user</x-button>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>


{{-- x-data="{ show: false }" x-show="show" x-on:open-add-my-contact.window="show = true"
    x-on:close-add-my-contact.window="show = false" x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false" style="display:none;" x-transition.duration --}}
