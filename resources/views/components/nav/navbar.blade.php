<nav class="bg-secondary-400  py-3 px-6  z-30">
    <div class="flex justify-between items-center  max-w-screen-max mx-auto">
        <div class="flex justify-center items-center gap-8">
            <a href="{{route('home')}}" aria-label="strona główna"><img src="{{asset('assets/logo/logo--light.png')}}"
                    alt="logo sanatorium rabka" class="w-28"></a>

            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col lg:flex-row flex-start lg:justify-center items-start lg:items-center gap-8 text-fontDark lg:text-fontLight">
                    <li>
                        <a href="{{route('about')}}" class="hover:text-primary-400 duration-300">O nas</a>
                    </li>
                    <li>
                        <x-nav.dropdown id="pokoje" title="Pokoje">
                            <x-nav.dropdown-item href="">Pokoj 1</x-nav.dropdown-item>
                            <x-nav.dropdown-item href="">Pokoj 2</x-nav.dropdown-item>
                            <x-nav.dropdown-item href="">Pokoj 3</x-nav.dropdown-item>
                        </x-nav.dropdown>
                    </li>
                    <li>
                        <a href="">NFZ</a>
                    </li>
                    <li>
                        <div class="mx-auto flex  w-full items-center justify-center  ">
                            <div class="group relative cursor-pointer py-2">

                                <div class="flex items-center justify-between  ">
                                    <a href="{{route('offer.index')}}" class="menu-hover  ">
                                        Rehabilitacja
                                    </a>
                                    <span>
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1" d="m1 1 4 4 4-4" />
                                    </span>
                                </div>

                                <div
                                    class="mt-2 invisible absolute z-50 flex  flex-col bg-gray-100 py-1 px-4  shadow-xl group-hover:visible w-44">

                                  
                                    
                                    @foreach ($rehabilitations as $rehabilitation)
                                    <a href="{{route('offer.show', $rehabilitation->slug)}}"
                                        class=" my-2 block border-b border-gray-100 py-1 text-fontDark hover:text-secondary-400 md:mx-2">
                                        {{$rehabilitation->title}}
                                    </a>
                                    @endforeach
                                    <a href="{{route('rabka.attractions')}}"
                                        class=" my-2 block border-b border-gray-100 py-1 text-fontDark hover:text-secondary-400 md:mx-2">
                                        Zabiegi
                                    </a>
                                





                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('gallery')}}" class="hover:text-primary-400 duration-300">Galeria</a>
                    </li>



                    <li>
                        <div class="mx-auto flex  w-full items-center justify-center  ">
                            <div class="group relative cursor-pointer py-2">

                                <div class="flex items-center justify-between  ">
                                    <a href="{{route('offer.index')}}" class="menu-hover  ">
                                        Rabka Zdrój
                                    </a>
                                    <span>
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1" d="m1 1 4 4 4-4" />
                                    </span>
                                </div>

                                <div
                                    class="mt-2 invisible absolute z-50 flex  flex-col bg-gray-100 py-1 px-4  shadow-xl group-hover:visible w-44">

                                  
                                    <a href="{{route('rabka.info')}}"
                                        class=" my-2 block border-b border-gray-100 py-1 text-fontDark hover:text-secondary-400 md:mx-2">
                                        Informacje
                                    </a>
                                    <a href="{{route('rabka.attractions')}}"
                                        class=" my-2 block border-b border-gray-100 py-1 text-fontDark hover:text-secondary-400 md:mx-2">
                                        Atrakcje
                                    </a>
                                





                                </div>
                            </div>
                        </div>
                    </li>

                    <li>

                        <div class="mx-auto flex  w-full items-center justify-center  ">
                            <div class="group relative cursor-pointer py-2">

                                <div class="flex items-center justify-between  ">
                                    <a href="{{route('offer.index')}}" class="menu-hover  ">
                                        Oferty
                                    </a>
                                    <span>
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1" d="m1 1 4 4 4-4" />
                                    </span>
                                </div>

                                <div
                                    class="mt-2 invisible absolute z-50 flex  flex-col bg-gray-100 py-1 px-4  shadow-xl group-hover:visible w-44">

                                    {{-- {{dd($offers)}} --}}

                                    @foreach ($offers as $offer)
                                    <a href="{{route('offer.show', $offer->slug)}}"
                                        class=" my-2 block border-b border-gray-100 py-1 text-fontDark hover:text-secondary-400 md:mx-2">
                                        {{$offer->title}}
                                    </a>
                                    @endforeach





                                </div>
                            </div>
                        </div>





                    </li>
                    <li>
                        <a href="{{route('contact')}}" class="hover:text-primary-400 duration-300">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden xl:flex">
            <x-link-button href="/">Jesień w górach</x-link-button>
        </div>

        {{-- hamburger --}}
        <button type="button"
            class="p-1 inline-flex lg:hidden items-center gap-x-2 text-sm font-medium rounded-sm border border-transparent  focus:outline-none focus:bg-primary-400 disabled:opacity-50 disabled:pointer-events-none"
            data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation">
            <x-lucide-menu class="size-6 text-fontLight" />
        </button>
    </div>
</nav>

{{-- canvas --}}

<x-nav.canvas />