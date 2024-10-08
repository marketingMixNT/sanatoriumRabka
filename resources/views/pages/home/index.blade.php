<x-layouts.app title="Sanatorium Cegielski Rabka-Zdrój – Kuracje, Rehabilitacja, Wypoczynek w Górach"
    description="Odkryj Sanatorium Cegielski w Rabce-Zdrój – idealne miejsce na kuracje, rehabilitację i relaks w górskim otoczeniu. Komfortowe pobyty z zabiegami zdrowotnymi.">

    @include('pages.home.partials.slider')
    @include('pages.home.partials.offers')
    @include('pages.home.partials.about')
    @include('pages.home.partials.cta')
    @include('pages.home.partials.attractions')
    @include('pages.home.partials.testimonials')

    <x-map />

</x-layouts.app>