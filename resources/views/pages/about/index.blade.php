<x-layouts.app title="O Nas – Sanatorium Cegielski Rabka-Zdrój"
    description="Poznaj Sanatorium Cegielski w Rabce-Zdrój – ośrodek z bogatą tradycją, oferujący kuracje zdrowotne, rehabilitację i wypoczynek w malowniczym otoczeniu górskim.">

    {{-- header --}}
    <x-header title="O nas" bgi="{{asset('assets/images/sanatorium-rabka-3.webp')}}" />

    {{-- section --}}
    <section class="py-12 sm:pt-24 pb-12">

        <x-container>

            {{-- heading --}}
            <x-heading-horizontal subheading="Komfort i Piękno Natury na Wyciągnięcie Ręki"
                heading="Sanatorium Cegielski Twoja Oaza Spokoju w Rabce-Zdrój">
                <x-text class="sm:pt-10">
                    Sanatorium „Cegielski” to przytulny ośrodek zlokalizowany w sercu Rabki-Zdrój, na południowym zboczu
                    góry Bania. Z jego okien można podziwiać malownicze widoki na okolicę. Oferujemy 188 miejsc
                    noclegowych w przytulnych pokojach dwu- i trzyosobowych, wyposażonych w łazienki, telewizory i, w
                    większości, słoneczne balkony.</x-text>
                <x-text class="sm:pt-10">Naszym Gościom udostępniamy także eleganckie apartamenty. Każdy z nich składa się
                    z salonu z balkonem, sypialni, łazienki oraz w pełni wyposażonego aneksu kuchennego, zapewniając
                    komfort i wygodę podczas pobytu.</x-text>
            </x-heading-horizontal>


            <div class=" grid lg:grid-cols-3 gap-12 mt-16">

                <img src="{{asset('assets/images/1200/sanatorium-rabka-17.webp')}}"
                    alt="widok z balkonu w Sanatorium Cegielski w Rabce"
                    class=" h-full w-full object-cover aspect-[5/4] shadow-md " loading="lazy">
                <img src="{{asset('assets/images/1200/sanatorium-rabka-8.webp')}}"
                    alt="pokój w Sanatorium Cegielski w Rabce"
                    class=" h-full w-full object-cover aspect-[5/4] shadow-md " loading="lazy">
                <img src="{{asset('assets/images/1200/sanatorium-rabka-21.webp')}}"
                    alt="stołowka w Sanatorium Cegielski w Rabce"
                    class=" h-full w-full object-cover aspect-[5/4] shadow-md " loading="lazy">



            </div>


            </div>

        </x-container>
    </section>

    {{-- section --}}
    <section class="pt-6 pb-6 sm:pt-12 sm:pb-12 ">
        <x-container class="max-w-screen-xl  ">

            <div class="grid  lg:grid-cols-2 gap-16 lg:gap-32">



                <div class="space-y-6 lg:space-y-12 flex justify-center items-center flex-col order-1">
                    <div class="space-y-8 pb-8">



                        <x-text>Rabka-Zdrój, znana jako perła polskich uzdrowisk, urzeka swoim zdrowotnym mikroklimatem
                            i bogatą historią. To idealne miejsce dla tych, którzy pragną połączyć leczniczy wypoczynek
                            z odkrywaniem kultury i tradycji regionu.</x-text>
                        <x-text>Oferuje nie tylko terapeutyczne powietrze, ale także mnóstwo atrakcji, od parków
                            rozrywki po muzea i galerie, czyniąc każdy pobyt tu niezapomnianym doświadczeniem.
                        </x-text>
                    </div>
                    <img src="{{asset('assets/images/1200/sanatorium-rabka-o-nas-1.webp')}}" alt="widok na Tatry"
                        class=" object-cover aspect-[3/2] shadow-md " loading="lazy">

                    <div class="grid sm:grid-cols-3 gap-12">



                        <div class="flex flex-col justify-start items-start  text-left">
                            <div class="flex  font-medium"><span class="text-secondary-400  text-3xl">50</span> <span
                                    class="text-primary-400 text-xl">+</span></div>
                            <span class="text-base">Lat Doświadczenia</span>
                        </div>

                        <div class="flex flex-col justify-start items-start  text-left">
                            <div class="flex  justify-start font-medium"><span
                                    class="text-3xl text-secondary-400">10000</span> <span
                                    class="text-primary-400 text-xl">+</span></div>
                            <span class="text-base">Zadowolonych klientów</span>
                        </div>

                        <div class="flex flex-col justify-start items-start  text-left">
                            <div class="flex   font-medium"><span class="text-3xl text-secondary-400">196</span> <span
                                    class="text-primary-400 text-xl">+</span></div>
                            <span class="text-base">Miejsc</span>
                        </div>

                    </div>
                </div>

                <div class="space-y-6 ">
                    <div class=" space-y-4">
                        <span class="text-primary-400">Przygody i Tradycje – Niezapomniane Doświadczenia Czekają</span>
                        <h2 class="text-secondary-400 text-4xl sm:text-5xl font-medium pb-6">Odkryj Uroki Regionu z
                            Naszymi
                            Wyjątkowymi Wycieczkami
                        </h2>
                    </div>
                    <div class="space-y-8 pb-8">
                        <x-text>W Sanatorium „Cegielski” zapewniamy naszym Gościom bogaty wybór aktywności i wycieczek,
                            aby
                            w pełni wykorzystać piękno i atrakcje okolicy.</x-text>
                        <x-text>Oferujemy przewodnikowe wędrówki piesze po malowniczej okolicy Rabki-Zdrój, wieczory
                            przy
                            ognisku z pieczeniem kiełbasek i muzyką góralską (zimą organizujemy kuligi), jak również
                            wycieczki autokarowe do popularnych miejsc takich jak Zakopane, Morskie Oko, Kopalnia Soli w
                            Wieliczce, a także na spływy Dunajcem czy do Szczawnicy.</x-text>
                        <x-text>Każda z tych atrakcji to szansa na niezapomniane przeżycia i bliższe poznanie kultury
                            oraz
                            piękna naszego regionu.</x-text>
                    </div>
                    <img src="{{asset('assets/images/1200/sanatorium-rabka-o-nas-2.webp')}}" alt="Rabka Zdrój"
                        class=" object-cover aspect-[3/2] shadow-md " loading="lazy">
                </div>
            </div>

        </x-container>
    </section>

    {{-- section --}}
    <section class="pt-6 lg:pt-12 pb-12">
        <x-container class="max-w-screen-xl">

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-32 ">
                <div class=" space-y-4">
                    <span class="text-primary-400">Komfort i Piękno Natury na Wyciągnięcie Ręki</span>
                    <h2 class="text-secondary-400 text-4xl sm:text-5xl font-medium pb-6">Nasze Zaangażowanie w Pomoc
                        Osobom Niepełnosprawnym</h2>

                    <img src="{{asset('assets/images/1200/stock/sanatorium-rabka-3.webp')}}"
                        alt="niepełnosprawna osoba na wózku inwalidzkim" class="  object-cover aspect-[5/4] shadow-md "
                        loading="lazy">
                </div>

                <div class="space-y-8 pb-8 flex justify-center items-center flex-col">
                    <x-text>W Sanatorium „Cegielski” jesteśmy dumni z posiadania tytułu Ośrodka przyjaznego dla osób
                        niepełnosprawnych, wyróżnionego przez Kapitułę 4,5 słoneczkiem. Nasz ośrodek jest w pełni
                        dostosowany do potrzeb osób z niepełnosprawnościami, oferując łatwy dostęp dzięki podjazdom,
                        windom oraz specjalnie zaprojektowanym pokojom dla osób poruszających się na wózkach
                        inwalidzkich.</x-text>
                    <x-text>Posiadamy również wpis do rejestru Wojewody Małopolskiego jako Organizator turnusów
                        rehabilitacyjnych oraz Ośrodek przyjmujący turnusy rehabilitacyjne, co potwierdza nasze
                        zobowiązanie do zapewniania wyjątkowej opieki i dostępności dla wszystkich naszych Gości.
                    </x-text>
                </div>

            </div>

        </x-container>

    </section>

    <x-facebook-banner />

</x-layouts.app>