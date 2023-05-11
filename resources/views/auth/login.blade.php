<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-8">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4 mb-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    <form>
        <div class="w-full sm:max-w-md bg-white px-6 py-4 shadow-md overflow-hidden sm:rounded-lg" id="left">
            <div class="card">
                <div class="giex">
                    <div class="first">GI</div>
                    <div class="last">EX</div>
                </div>
                <div class="image1">
                    <img src="img/login1.png">
                </div>
            </div>
        </div>
    </form>

    <style>
        #left {
            position:absolute;
            height:320.5px;
            margin-left:-465px;
            margin-top:-302.5px;
            border: solid red;
            border-radius: 15px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .image1 {
            width: 110px;
            margin-left: 130px;
        }

        .first {
            float: left;
            color: blue;
            font-size: 80px;
            margin-left: 100px;
            font-family: 'Times New Roman', Times, serif, sans-serif;
        }

        .last {
            color: red;
            font-size: 80px;
            font-family: 'Times New Roman', Times, serif, sans-serif;
        }
    </style>
</x-guest-layout>

