{{-- <ul class="flex flex-col justify-start items-start gap-8 text-fontDark"> --}}

<ul class="flex flex-col lg:flex-row flex-start lg:justify-center items-start lg:items-center gap-8 text-fontDark lg:text-fontLight">
    <li>
        <a href="{{route('about')}}" class="hover:text-primary-400 duration-300">O nas</a>
    </li>
    <li>
        <x-nav.dropdown title="Pokoje">
            <x-nav.dropdown-item href="">Pokoj 1</x-nav.dropdown-item>
            <x-nav.dropdown-item href="">Pokoj 2</x-nav.dropdown-item>
            <x-nav.dropdown-item href="">Pokoj 3</x-nav.dropdown-item>
        </x-nav.dropdown>
    </li>
    <li>
        <a href="">NFZ</a>
    </li>
    <li>
        <a href="">Rehabilitacja</a>
    </li>
    <li>
        <a href="">Galeria</a>
    </li>
    <li>
        <a href="">Oferta</a>
    </li>
    <li>
        <a href="">Rabka Zdrój</a>
    </li>
    <li>
        <a href="">Kontakt</a>
    </li>
</ul>