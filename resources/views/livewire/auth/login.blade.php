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
                class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
                <img src="{{ asset('static/icons/winners_logo.png') }}" class="mr-2 h-12" alt="Winners Chapel Logo">
                <span>Winners Portal</span>
            </a>
            <!-- Card -->
            <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Sign in to platform
                </h2>
                <x-validation-errors class="mb-4" />

                @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>



                    <div class="flex items-start mt-4">
                        <div class="flex items-center h-5">
                            <x-checkbox id="remember_me" name="remember" />
                        </div>
                        <div class="ml-3 text-sm">
                            <x-label for="remember">Remember me</x-label>
                        </div>
                        <a href="{{ route('password.request') }}" wire:navigate
                            class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">Forgot your
                            password?</a>
                    </div>

                    <x-button type="submit">Login to your account</x-button>
                    <div class="text-sm font-medium mt-3 text-gray-500 dark:text-gray-400">
                        Not registered? <a href="{{ route('register') }}" wire:navigate
                            class="text-primary-700 hover:underline dark:text-primary-500">Create account</a>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
