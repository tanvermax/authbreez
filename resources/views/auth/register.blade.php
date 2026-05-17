<x-guest-layout>
    <div class="relative w-full max-w-md mx-auto">
        
        <div class="text-center mb-8 animate-fade-in">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-tr from-indigo-500 to-violet-600 shadow-lg shadow-indigo-500/30 mb-4 transition-transform duration-500 hover:rotate-12 cursor-pointer">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Join <span class="bg-gradient-to-r from-indigo-400 to-violet-500 bg-clip-text text-transparent">NoteArch</span>
            </h2>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Start archiving your smart notes today.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div class="group relative">
                <x-input-label for="name" :value="__('Full Name')" class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400 group-focus-within:text-indigo-500 transition-colors duration-300" />
                <div class="mt-1 relative rounded-xl shadow-sm">
                    <x-text-input id="name" 
                        class="block w-full px-4 py-2.5 bg-gray-50 dark:bg-gray-900/50 border-gray-200 dark:border-gray-800 rounded-xl focus:border-indigo-500 dark:focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-300 placeholder-gray-400 dark:placeholder-gray-600" 
                        type="text" 
                        name="name" 
                        :value="old('name')" 
                        required 
                        autofocus 
                        placeholder="John Doe"
                        autocomplete="name" />
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs" />
            </div>

            <div class="group relative">
                <x-input-label for="email" :value="__('Email Address')" class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400 group-focus-within:text-indigo-500 transition-colors duration-300" />
                <div class="mt-1 relative rounded-xl shadow-sm">
                    <x-text-input id="email" 
                        class="block w-full px-4 py-2.5 bg-gray-50 dark:bg-gray-900/50 border-gray-200 dark:border-gray-800 rounded-xl focus:border-indigo-500 dark:focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-300 placeholder-gray-400 dark:placeholder-gray-600" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        placeholder="you@example.com"
                        autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
            </div>

            <div class="group relative">
                <x-input-label for="password" :value="__('Password')" class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400 group-focus-within:text-indigo-500 transition-colors duration-300" />
                <div class="mt-1 relative rounded-xl shadow-sm">
                    <x-text-input id="password" 
                        class="block w-full px-4 py-2.5 bg-gray-50 dark:bg-gray-900/50 border-gray-200 dark:border-gray-800 rounded-xl focus:border-indigo-500 dark:focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-300 placeholder-gray-400 dark:placeholder-gray-600"
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        required 
                        autocomplete="new-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
            </div>

            <div class="group relative">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400 group-focus-within:text-indigo-500 transition-colors duration-300" />
                <div class="mt-1 relative rounded-xl shadow-sm">
                    <x-text-input id="password_confirmation" 
                        class="block w-full px-4 py-2.5 bg-gray-50 dark:bg-gray-900/50 border-gray-200 dark:border-gray-800 rounded-xl focus:border-indigo-500 dark:focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-300 placeholder-gray-400 dark:placeholder-gray-600"
                        type="password"
                        name="password_confirmation" 
                        placeholder="••••••••"
                        required 
                        autocomplete="new-password" />
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs" />
            </div>

            <div class="pt-3">
                <button type="submit" class="w-full flex justify-center items-center px-4 py-3 bg-gradient-to-r from-indigo-500 to-violet-600 hover:from-indigo-600 hover:to-violet-700 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/20 hover:shadow-indigo-600/30 active:scale-[0.98] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                    {{ __('Create Account') }}
                    <svg class="w-4 h-4 ms-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </button>
            </div>
        </form>

        <div class="mt-6 text-center border-t border-gray-100 dark:border-gray-800/60 pt-4">
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Already registered? 
                <a href="{{ route('login') }}" class="font-semibold text-indigo-500 hover:text-indigo-400 transition-colors duration-200">
                    Sign In
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>