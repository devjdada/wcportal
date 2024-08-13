<div class="px-4 pt-6">
    <livewire:stats.souls-weekly-bar-chart />
    <div>
        <livewire:stats.wsf-weekly-report />
    </div>

    <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">

    </div>
    <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">

    </div>
    <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
        <livewire:dashboard.anouncement />
        <!-- Right Content -->
        <div class="grid gap-4">
            <livewire:stats.souls-monthly-doughnut-chart />
            <livewire:stats.wsf-weekly-report-chart />
        </div>
    </div>
    <!-- 2 columns -->
    <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
        <livewire:dashboard.blog />
        <livewire:dashboard.testimony />
    </div>

    {{--
    <x-dialog :close="false" wire:model="registerOwDialog" :maxWidth="'md'" :title="'Register As Ordained Worker'">


        <!-- Modal body -->

        <div class="space-y-6">
            @session('status')
                <div class="mb-4 text-sm font-medium text-green-600">

                </div>
            @endsession
            <x-validation-errors class="mb-4" />
            <form wire:submit="joinOw">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-3">
                        <label for="ordain_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            When Where You Ordained
                        </label>
                        <x-input id="ordain_date" type='date' wire:model="ordain_date" />
                    </div>
                    <div class="col-span-3">
                        <label for="ordain_where" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Where were You Ordained
                        </label>
                        <x-input id="ordain_where" wire:model="ordain_where" />
                    </div>

                    <div class="col-span-3">
                        <label for="wing" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Location of Last Posting
                        </label>
                        <x-select id="wing" wire:model="wing">
                            <option>Select Wing</option>
                            @foreach ($posings as $post)
                                <option value="{{ $post->wing }}">{{ $post->wing }} {{ $post->tag }}</option>
                            @endforeach
                        </x-select>
                    </div>
                </div>
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <x-button type="submit">
                        Register
                    </x-button>
                </div>
            </form>
        </div>
        <!-- Modal footer -->

    </x-dialog> --}}

    <x-dialog :close="false" wire:model="updateDialog" :maxWidth="'md'" :title="'Update Profile Data'">


        <!-- Modal body -->

        <div class="space-y-6">
            @session('status')
                <div class="mb-4 text-sm font-medium text-green-600">

                </div>
            @endsession
            <x-validation-errors class="mb-4" />
            <form wire:submit="update">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-3">
                        <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Date of Birth
                        </label>
                        <x-input id="dob" type='date' wire:model="dob" />
                    </div>
                    <div class="col-span-3">
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Gender
                        </label>
                        <x-select id="gender" wire:model.live="gender">
                            <option>select gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </x-select>

                    </div>
                    <div class="col-span-6">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Address
                        </label>
                        <x-textarea id="address" wire:model="address" rows="4">
                        </x-textarea>
                    </div>

                    <div class="col-span-3">
                        <label for="marital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Marital Status
                        </label>
                        <x-select id="marital" wire:model.live="marital">

                            <option>select marital status</option>
                            <option value="single">single</option>
                            <option value="married">married</option>
                            <option value="divorced">divorced</option>
                            <option value="separated">separated</option>
                            <option value="widowed">widowed</option>
                        </x-select>
                    </div>

                    <div class="col-span-3">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Status
                        </label>
                        <x-select id="status" wire:model.live="userStatus">

                            <option>select status</option>
                            <option value="brother">brother</option>
                            <option value="pastor">pastor</option>
                            <option value="elder">elder</option>
                            <option value="deacon">deacon</option>

                            <option value="sister">sister</option>
                            <option value="elder">elder</option>
                            <option value="deaconess">deaconess</option>




                        </x-select>
                    </div>

                    @if ($marital == 'married')
                        <div class="col-span-3">
                            <label for="marriage_anniversary"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Marriage Annivesary
                            </label>
                            <x-input id="marriage_anniversary" type="date" wire:model="marriage_anniversary" />
                        </div>
                    @endif




                    @if ($userStatus == 'deacon' || $userStatus == 'deaconess')
                        <div class="col-span-3">
                            <label for="wing" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Location of Last Posting
                            </label>
                            <x-select id="wing" wire:model="wing">
                                <option>Select Wing</option>
                                @foreach ($posings as $post)
                                    <option value="{{ $post->wing }}">{{ $post->wing }} {{ $post->tag }}</option>
                                @endforeach
                            </x-select>
                        </div>
                    @endif

                    <div class="col-span-3">
                        <x-checkbox id="caller_squad" wire:model='caller_squad' name="caller_squad" />
                        <label for="caller_squad" class="mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Join Caller Squard
                        </label>
                    </div>

                </div>
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <x-button type="submit">
                        Update Data
                    </x-button>
                </div>
            </form>
        </div>
        <!-- Modal footer -->

    </x-dialog>



</div>
