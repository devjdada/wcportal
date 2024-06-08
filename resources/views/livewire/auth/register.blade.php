<div class="flex flex-col overflow-y-auto md:flex-row">
    <div class="h-32 md:h-auto md:w-1/2">
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="../assets/img/login-office.jpeg"
            alt="Office" />
        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
            src="{{ asset('static/images/users/thomas-lean.png') }}" alt="Office" />
    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="flex flex-col items-center justify-center ">
            <a href="#"
                class="flex items-center justify-center mb-4 text-2xl font-semibold lg:mb-4 dark:text-white">
                <img src="{{ asset('static/icons/winners_logo.png') }}" class="mr-2 h-12" alt="Winners Chapel Logo">
                <span>Winners Portal</span>
            </a>
            <!-- Card -->
            <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Register New Account
                </h2>
                <x-validation-errors class="mb-4" />

                @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="phone" value="{{ __('Phone Number') }}" />
                        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone')" required autocomplete="phone" />
                        {{-- <x-input id="phone" class="block mt-1 w-full" pattern="[0]{1}[0-9]{10}" type="text" name="phone" :value="old('phone')" required autocomplete="phone" /> --}}
                    </div>

                    <div class="mt-4">
                        <x-label for="phone" value="{{ __('Station') }}" />
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            name="station_id" id="station_id">
                            @foreach ($stations as $station)
                                <option value="{{ $station->id }}">{{ $station->location }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="text-primary-700 hover:underline dark:text-primary-500">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="text-primary-700 hover:underline dark:text-primary-500">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <x-button type="submit" class="py-4">Create account</x-button>
                    <div class="text-sm font-medium pt-4 text-gray-500 dark:text-gray-400">
                        Already have an account?
                        <a href="{{ route('login') }}" wire:navigate
                            class="text-primary-700 hover:underline dark:text-primary-500">Login here</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
