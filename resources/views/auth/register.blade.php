<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" >
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- No_hp -->
        <div>
            <x-input-label for="no_hp" :value="__('No. hp')" />
            <x-text-input id="no_hp" class="block mt-1 w-full" type="number" name="no_hp" :value="old('no_hp')" required autofocus autocomplete="no_hp" />
            <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <form>
        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" id="left">
            <div class="card2">
                <div class="image">
                    <img src="img/gembok.png">
                </div>
                <div class="text">
                    <div class="first">
                        Halo, Teman!
                    </div>
                    <div class="last">
                        Daftarkan diri anda dan mulai gunakan layanan kami segera
                    </div>
                </div>
            </div>
        </div>
    </form>

    <style>
        #no_hp input::-webkit-outer-spin-button,input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        #left {
            position:absolute;
            height:460px;
            margin-left:-468px;
            margin-top:-442px;
            border: solid red;
            border-radius: 15px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .image {
            width: 250px;
            margin-left: 75px;
            margin-bottom: 35px;
            margin-top: 20px;
        }

        .first {
            font-size: 50px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif, sans-serif;
            margin-bottom: 15px;
        }

        .last {
            font-size: 22px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif, sans-serif;
        }
    </style>
</x-guest-layout>
