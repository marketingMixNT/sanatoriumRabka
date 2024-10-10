<x-layouts.app title="Polityka Prywatności – Sanatorium Cegielski Rabka-Zdrój"
    description="Zapoznaj się z polityką prywatności Sanatorium Cegielski w Rabce-Zdrój. Dowiedz się, jak chronimy Twoje dane osobowe i jakie prawa przysługują Ci w związku z RODO.">

    {{-- header --}}
    <x-header title="Polityka Prywatności" bgi="{{asset('assets/images/sanatorium-rabka-2.webp')}}" />

    {{-- section --}}
    <section class="py-20">

        <x-container class="max-w-screen-xl prose">

            {!!$privacyPolicy->content!!}

        </x-container>
    </section>
</x-layouts.app>