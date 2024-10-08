
    <ul
        class="flex flex-col lg:flex-row flex-start lg:justify-center items-start lg:items-center gap-8 text-fontDark lg:text-fontLight">

        <x-nav.nav-item href="{{route('about')}}">O nas</x-nav.nav-item>

        <x-nav.dropdown title="Pokoje">

            {{-- @foreach ($nfz as $page)
            <x-nav.dropdown-item href="{{route('nfz.show', $page->slug)}}">{{$page->title}}
            </x-nav.dropdown-item>
            @endforeach --}}
        </x-nav.dropdown>

        <x-nav.dropdown title="NFZ">

            @foreach ($nfz as $page)
            <x-nav.dropdown-item href="{{route('nfz.show', $page->slug)}}">{{$page->title}}
            </x-nav.dropdown-item>
            @endforeach
        </x-nav.dropdown>

        <x-nav.dropdown title="Rehabilitacja">

            {{-- @foreach ($nfz as $page)
            <x-nav.dropdown-item href="{{route('nfz.show', $page->slug)}}">{{$page->title}}
            </x-nav.dropdown-item>
            @endforeach --}}
        </x-nav.dropdown>

        <x-nav.nav-item href="{{route('gallery')}}">Galeria</x-nav.nav-item>

        <x-nav.dropdown title="Rabka Zdrój">

            {{-- @foreach ($nfz as $page)
            <x-nav.dropdown-item href="{{route('nfz.show', $page->slug)}}">{{$page->title}}
            </x-nav.dropdown-item>
            @endforeach --}}
        </x-nav.dropdown>

        <x-nav.dropdown title="Oferty">

            {{-- @foreach ($nfz as $page)
            <x-nav.dropdown-item href="{{route('nfz.show', $page->slug)}}">{{$page->title}}
            </x-nav.dropdown-item>
            @endforeach --}}
        </x-nav.dropdown>

        <x-nav.nav-item href="{{route('contact')}}">Kontakt</x-nav.nav-item>

    </ul>
