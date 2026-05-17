<x-guest-layout>
    <x-auth-session-status class="mb-4 text-center text-sm font-semibold text-emerald-400 bg-emerald-500/10 p-3 rounded-lg" :status="session('status')" />

    <div class="relative w-full max-w-md mx-auto">
        
        <div class="text-center mb-8 animate-fade-in">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-tr from-indigo-500 to-violet-600 shadow-lg shadow-indigo-500/30 mb-4 transition-transform duration-500 hover:rotate-12 cursor-pointer">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Welcome to <span class="bg-gradient-to-r from-indigo-400 to-violet-500 bg-clip-text text-transparent">NoteArch</span>
            </h2>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Archiving your thoughts, beautifully.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div class="group relative">
                <x-input-label for="email" :value="__('Email Address')" class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400 group-focus-within:text-indigo-500 transition-colors duration-300" />
                <div class="mt-1 relative rounded-xl shadow-sm">
                    <x-text-input id="email" 
                        class="block w-full px-4 py-3 bg-gray-50 dark:bg-gray-900/50 border-gray-200 dark:border-gray-800 rounded-xl focus:border-indigo-500 dark:focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-300 placeholder-gray-400 dark:placeholder-gray-600" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus 
                        placeholder="you@example.com"
                        autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
            </div>

            <div class="group relative">
                <div class="flex items-center justify-between">
                    <x-input-label for="password" :value="__('Password')" class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400 group-focus-within:text-indigo-500 transition-colors duration-300" />
                    @if (Route::has('password.request'))
                        <a class="text-xs font-medium text-indigo-500 hover:text-indigo-400 transition-colors duration-200" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>
                <div class="mt-1 relative rounded-xl shadow-sm">
                    <x-text-input id="password" 
                        class="block w-full px-4 py-3 bg-gray-50 dark:bg-gray-900/50 border-gray-200 dark:border-gray-800 rounded-xl focus:border-indigo-500 dark:focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-300 placeholder-gray-400 dark:placeholder-gray-600"
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        required 
                        autocomplete="current-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
            </div>

            <div class="flex items-center justify-between pt-1">
                <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                    <input id="remember_me" type="checkbox" class="rounded-md bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800 transition-all duration-200" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-200 transition-colors duration-200">{{ __('Keep me logged in') }}</span>
                </label>
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full flex justify-center items-center px-4 py-3 bg-gradient-to-r from-indigo-500 to-violet-600 hover:from-indigo-600 hover:to-violet-700 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/20 hover:shadow-indigo-600/30 active:scale-[0.98] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                    {{ __('Sign In to Dashboard') }}
                    <svg class="w-4 h-4 ms-2 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </div>
        </form>

        <div class="mt-8 text-center border-t border-gray-100 dark:border-gray-800/60 pt-5">
            <p class="text-sm text-gray-500 dark:text-gray-400">
                New to NoteArch? 
                <a href="{{ route('register') }}" class="font-semibold text-indigo-500 hover:text-indigo-400 transition-colors duration-200">
                    Create an account
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>