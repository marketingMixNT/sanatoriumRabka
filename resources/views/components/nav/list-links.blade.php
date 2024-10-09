<ul
    class="flex flex-col lg:flex-row flex-start lg:justify-center items-start lg:items-center gap-8 text-fontDark lg:text-fontLight">

    <x-nav.nav-item href="{{route('about')}}">O nas</x-nav.nav-item>

    <x-nav.dropdown title="Pokoje">

        @foreach ($rooms as $room)
        <x-nav.dropdown-item href="{{route('room.show', $room->slug)}}">{{$room->title}}
        </x-nav.dropdown-item>
        @endforeach
    </x-nav.dropdown>

    <x-nav.dropdown title="NFZ">

        @foreach ($nfzPages as $page)
        <x-nav.dropdown-item href="{{route('nfz.page', $page->slug)}}">{{$page->page_title}}
        </x-nav.dropdown-item>
        @endforeach
    </x-nav.dropdown>

    <x-nav.dropdown title="Rehabilitacja">

        @foreach ($rehabilitationPages as $page)
        <x-nav.dropdown-item href="{{route('rehabilitation.page', $page->slug)}}">{{$page->page_title}}
        </x-nav.dropdown-item>
        @endforeach

        <x-nav.dropdown-item href="{{route('rehabilitation.treatments')}}">Zabiegi
        </x-nav.dropdown-item>

    </x-nav.dropdown>

    <x-nav.nav-item href="{{route('gallery')}}">Galeria</x-nav.nav-item>

    <x-nav.dropdown title="Rabka Zdrój">

        <x-nav.dropdown-item href="{{route('rabka')}}">O Rabce
        </x-nav.dropdown-item>

        @foreach ($rabkaPages as $page)
        <x-nav.dropdown-item href="{{route('rabka.page', $page->slug)}}">{{$page->page_title}}
        </x-nav.dropdown-item>
        @endforeach


    </x-nav.dropdown>

    <x-nav.dropdown title="Oferty">

        @foreach ($offerPages as $page)
        <x-nav.dropdown-item href="{{route('offer.page', $page->slug)}}">{{$page->page_title}}
        </x-nav.dropdown-item>
        @endforeach
        @foreach ($offers as $offer)
        <x-nav.dropdown-item href="{{route('offer.show', $offer->slug)}}">{{$offer->title}}
        </x-nav.dropdown-item>
        @endforeach
    </x-nav.dropdown>

    <x-nav.nav-item href="{{route('contact')}}">Kontakt</x-nav.nav-item>

</ul>