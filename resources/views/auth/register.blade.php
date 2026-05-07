<x-frontend-layout>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full">

            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold">
                    Join <span class="text-[#ed792e]">Saharaizumi</span>
                </h1>
                <p class="text-gray-600 mt-2">Create an account and start ordering your favorite meals</p>
            </div>

            <!-- Register Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-8">

                    <!-- Google Signup -->
                    <a href="{{ route('google.login') }}"
                       class="flex items-center justify-center gap-3 w-full bg-white border border-gray-300 hover:border-gray-400 text-gray-700 font-medium py-3.5 px-4 rounded-2xl transition-all duration-200">
                        <img src="https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png"
                             alt="Google" class="w-6 h-6">
                        <span>Sign up with Google</span>
                    </a>

                    <div class="flex items-center gap-4 my-8">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <span class="text-sm text-gray-500 font-medium">OR</span>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>

                    <!-- Registration Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-6">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name"
                                         class="block mt-1 w-full rounded-2xl"
                                         type="text"
                                         name="name"
                                         :value="old('name')"
                                         required
                                         autofocus
                                         autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div class="mb-6">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email"
                                         class="block mt-1 w-full rounded-2xl"
                                         type="email"
                                         name="email"
                                         :value="old('email')"
                                         required
                                         autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-6">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password"
                                         class="block mt-1 w-full rounded-2xl"
                                         type="password"
                                         name="password"
                                         required
                                         autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-8">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation"
                                         class="block mt-1 w-full rounded-2xl"
                                         type="password"
                                         name="password_confirmation"
                                         required
                                         autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Submit Button -->
                        <x-primary-button class="w-full py-3.5 text-base rounded-2xl">
                            {{ __('Create Account') }}
                        </x-primary-button>
                    </form>

                </div>

                <!-- Login Link -->
                <div class="border-t border-gray-100 py-5 text-center bg-gray-50">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-[#ed792e] font-medium hover:underline">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-frontend-layout>
