
<div id="drawer-navigation"
    class="fixed top-0 left-0 z-40 h-screen py-4 px-8 overflow-y-auto transition-transform -translate-x-full bg-white w-full sm:w-80 dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-navigation-label">
    <a href="{{route('home')}}" aria-label="strona główna"><img src="{{asset('assets/logo/logo.png')}}"
            alt="logo sanatorium rabka" class="w-28"></a>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-sm border border-transparent bg-primary-400 text-fontLight hover:bg-primary-500 focus:outline-none focus:bg-primary-500 disabled:opacity-50 disabled:pointer-events-none w-8 h-8 absolute top-2.5 end-2.5 ">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <div class="pt-8 ">

        {{-- list links --}}
        <x-list-links />
    </div>
</div>