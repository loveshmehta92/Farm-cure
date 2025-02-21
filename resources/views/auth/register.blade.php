<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
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

        {{-- drop-down for role selection--}}
        <div class="relative" x-data="{ open: false, selectedRole: 'Select Role' }">
            <!-- Label -->
            <x-input-label for="role" :value="__('Role')" />
        
            <!-- Button to open dropdown -->
            <button @click="open = !open" type="button" 
                class="px-4 py-2 bg-blue-500 text-black rounded-md w-full focus:outline-none">
                <span x-text="selectedRole"></span>
            </button>
        
            <!-- Dropdown Menu -->
            <div x-show="open" @click.outside="open = false" @click.stop 
                class="absolute bg-white shadow-md rounded-md mt-2 w-full z-10">
                <a href="#" @click.prevent="selectedRole = 'consumer'; open = false; document.getElementById('role-input').value = 'consumer'" 
                    class="block px-4 py-2 hover:bg-gray-200">Consumer</a>
                <a href="#" @click.prevent="selectedRole = 'seller'; open = false; document.getElementById('role-input').value = 'seller'" 
                    class="block px-4 py-2 hover:bg-gray-200">Seller/Vendor</a>
                <a href="#" @click.prevent="selectedRole = 'admin'; open = false; document.getElementById('role-input').value = 'admin'" 
                    class="block px-4 py-2 hover:bg-gray-200">Admin</a>
            </div>
        
            <!-- Hidden input to store role value -->
            <input type="hidden" id="role-input" name="role" x-model="selectedRole" required>
        
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
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
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
