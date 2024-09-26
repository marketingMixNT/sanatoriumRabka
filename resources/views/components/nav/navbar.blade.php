<nav
    class="w-full bg-secondary-400  py-3 px-6 sticky top-0 z-30">
<div class="flex justify-between items-center  max-w-screen-max mx-auto">



    {{-- links --}}
    <div class="flex justify-center items-center gap-8">

        {{-- logo --}}
        <a href="{{route('home')}}" aria-label="strona główna"><img src="{{asset('assets/logo/logo--light.png')}}"
                alt="logo sanatorium rabka" class="w-28"></a>

        {{-- nav links --}}
        <div class="hidden lg:block">
            <x-nav.list-links />
        </div>
    </div>

    {{-- cta buttons --}}
    <div class="hidden xl:flex">
        <x-link-button href="/">Jesień w górach</x-link-button>
    </div>

    {{-- hamburger --}}
    <button type="button"
        class="p-1 inline-flex lg:hidden items-center gap-x-2 text-sm font-medium rounded-sm border border-transparent  focus:outline-none focus:bg-primary-400 disabled:opacity-50 disabled:pointer-events-none"
        data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
        <x-lucide-menu class="size-6 text-fontLight" />
    </button>



</div>
</nav>

    {{-- canvas --}}
    <x-nav.canvas />