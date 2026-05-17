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
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Admin Verification</p>
        </div>
       

        <form method="POST" action="{{ route('admin.resend') }}"  >
            @csrf
            <div class="pt-2">
                <button type="submit"
                 class="w-full flex justify-center   items-center px-4 py-3 bg-gradient-to-r  from-indigo-500 to-violet-600 hover:from-indigo-600  hover:to-violet-700 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/20 hover:shadow-indigo-600/30 active:scale-[0.98] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                   resend Email
                </button>
            </div>
        </form>

        <div class="mt-8 text-center border-t border-gray-100 dark:border-gray-800/60 pt-5">
            <p class="text-sm text-gray-500 dark:text-gray-400">
             
                <a  class="font-semibold text-indigo-500 hover:text-indigo-400 transition-colors duration-200">
                    Log Out
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>