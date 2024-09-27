<x-layouts.app title="Atrakcje" description="Atrakcje info">

    {{-- header --}}
    <x-header title="Atrakcje"
        bgi="https://images.unsplash.com/photo-1726931598787-00b60840177c?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

    {{-- section --}}
    <section class="pt-24 pb-12">

        <x-container class="max-w-screen-xl">

            {{-- heading --}}
            <x-heading-horizontal subheading="Komfort i Piękno Natury na Wyciągnięcie Ręki"
                heading="Sanatorium Cegielski Twoja Oaza Spokoju w Rabce-Zdrój">
                <x-text class="pt-10">
                    Sanatorium „Cegielski” to przytulny ośrodek zlokalizowany w sercu Rabki-Zdrój, na południowym zboczu
                    góry Bania. Z jego okien można podziwiać malownicze widoki na okolicę. Oferujemy 188 miejsc
                    noclegowych w przytulnych pokojach dwu- i trzyosobowych, wyposażonych w łazienki, telewizory i, w
                    większości, słoneczne balkony.</x-text>
                <x-text class="pt-10">Naszym Gościom udostępniamy także eleganckie apartamenty. Każdy z nich składa się
                    z salonu z balkonem, sypialni, łazienki oraz w pełni wyposażonego aneksu kuchennego, zapewniając
                    komfort i wygodę podczas pobytu.</x-text>
            </x-heading-horizontal>

            $@foreach ($attractions as $attraction)

            <div class="prose max-w-full">

                {!! tiptap_converter()->asHTML($attraction->description) !!}
            </div>

            @endforeach
        </x-container>



    </section>
</x-layouts.app>