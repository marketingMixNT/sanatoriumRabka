<x-layouts.app title="Regulamin – Sanatorium Cegielski Rabka-Zdrój"
    description="Przeczytaj regulamin Sanatorium Cegielski w Rabce-Zdrój. Poznaj zasady rezerwacji, pobytu, usług zdrowotnych oraz obowiązki gości podczas korzystania z naszych usług.">

    {{-- header --}}
    <x-header title="Regulamin" bgi="{{asset('assets/images/sanatorium-rabka-2.webp')}}" />

    {{-- section --}}
    <section class="py-20">

        <x-container class="max-w-screen-xl">

            {!!$regulations->content!!}

        </x-container>
    </section>
</x-layouts.app>