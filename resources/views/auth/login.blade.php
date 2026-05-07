<x-frontend-layout>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full">

            <!-- Header -->
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold">
                   Sign in to order your favorite curry sets
                </h2>

            </div>

            <!-- Login Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-8">

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-6" :status="session('status')" />

                    <!-- Google Login -->
                    <a href="{{ route('google.login') }}"
                       class="flex items-center justify-center gap-3 w-full bg-white border border-gray-300 hover:border-gray-400 text-gray-700 font-medium py-3.5 px-4 rounded-2xl transition-all duration-200">
                        <img src="https://www.google.com/images/branding/googleg/1x/googleg_standard_color_128dp.png"
                             alt="Google" class="w-6 h-6">
                        <span>Continue with Google</span>
                    </a>

                    <div class="flex items-center gap-4 my-8">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <span class="text-sm text-gray-500 font-medium">OR</span>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>

                    <!-- Email Login Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-6">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email"
                                         class="block mt-1 w-full rounded-2xl"
                                         type="email"
                                         name="email"
                                         :value="old('email')"
                                         required
                                         autofocus
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
                                         autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me + Forgot Password -->
                        <div class="flex items-center justify-between mb-8">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me"
                                       type="checkbox"
                                       class="rounded border-gray-300 text-[#ed792e] focus:ring-[#ed792e]"
                                       name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                   class="text-sm text-gray-600 hover:text-gray-900">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <x-primary-button class="w-full py-3.5 text-base rounded-2xl">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </form>

                </div>

                <!-- Register Link -->
                <div class="border-t border-gray-100 py-5 text-center bg-gray-50">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-[#ed792e] font-medium hover:underline">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-frontend-layout>
