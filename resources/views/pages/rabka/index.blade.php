<x-layouts.app title="Rabka Zdrój – Uzdrowisko i Miejsce Relaksu | Sanatorium Rabka"
    description="Odkryj Rabkę Zdrój, urokliwe uzdrowisko otoczone naturą, idealne do wypoczynku i rehabilitacji. Poznaj nasze usługi zdrowotne i relaksacyjne, które przywrócą harmonię ciała i umysłu.">

    {{-- header --}}
    <x-header title="Rabka Zdrój" bgi="{{asset('assets/images/1800/rabka-1.webp')}}" />

    {{-- section --}}
    <section class="py-12 sm:pt-24 pb-12">

        <x-container>

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



            <div class=" grid lg:grid-cols-3 gap-12 mt-16">

                <img src="{{asset('assets/images/1200/rabka-1.webp')}}"
                    alt="widok z balkonu w Sanatorium Cegielski w Rabce"
                    class=" h-full w-full object-cover aspect-[5/4] shadow-md " loading="lazy">

                <img src="{{asset('assets/images/1200/rabka-4.webp')}}"
                    alt="widok z balkonu w Sanatorium Cegielski w Rabce"
                    class=" h-full w-full object-cover aspect-[5/4] shadow-md " loading="lazy">

                <img src="{{asset('assets/images/1200/rabka-3.webp')}}"
                    alt="widok z balkonu w Sanatorium Cegielski w Rabce"
                    class=" h-full w-full object-cover aspect-[5/4] shadow-md " loading="lazy">
            </div>
        </x-container>
    </section>

      {{-- section --}}
      <section class="pt-6 pb-6 sm:pt-12 sm:pb-20 ">
        <x-container class="max-w-screen-xl  ">

            <div class="grid  lg:grid-cols-2 gap-16 lg:gap-32">



                <div class="space-y-6 lg:space-y-12 flex justify-center items-center flex-col order-1">
                    <div class="space-y-8 pb-8">



                        <x-text>Miłośnicy aktywnego wypoczynku odkryją w Rabce-Zdroju różnorodne trasy turystyczne, zarówno przyrodnicze, jak i kulturowe.

                         
                            
                          </x-text>
                        <x-text>   Miasto jest przecięte kilkoma pieszymi szlakami, idealnymi dla doświadczonych turystów, jak i dla tych preferujących spokojne spacery. Wśród nich znajduje się Główny Szlak Beskidzki, najdłuższy szlak górski w Polsce, oznaczony czerwonym kolorem i liczący 519 km. Prowadzi on z Rabki na szczyt Gorców – Turbacz, osiągając wysokość 1310 m n.p.m.
                        </x-text>
                        <x-text>   Dodatkowo, ze śródmieścia i dzielnicy Zaryte, wyruszają szlaki na Luboń Wielki, jedną z wyższych gór Beskidu Wyspowego. Warto również odwiedzić „Leśną Ścieżkę Edukacyjną” w Uroczysku „Krzywoń”, która pozwala na bliższe poznanie przyrody okolicy. Rabka-Zdrój zaprasza również na trasy kulturowe, które ukazują bogactwo architektury i kultury regionu, w tym obiekty Szlaku Architektury Drewnianej oraz warsztaty lokalnych twórców tradycyjnego rzemiosła.
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
                        <span class="text-primary-400">Centrum Zdrowia i Regeneracji w Sercu Natury
                        </span>
                        <h2 class="text-secondary-400 text-4xl sm:text-5xl font-medium pb-6">Rabka-Zdrój: Uzdrowiskowa Perła Polski i Europy
                        </h2>
                    </div>
                    <div class="space-y-8 pb-8">
                        <x-text>Rabka-Zdrój cieszy się renomą jednego z najbardziej znanych uzdrowisk w Polsce i Europie. Tutaj, w leczeniu chorób układu oddechowego i krążenia, wykorzystuje się nie tylko lecznicze właściwości miejscowego klimatu, ale również bogactwo lokalnych źródeł wód mineralnych i solanek.

                          </x-text>
                        <x-text>  Miasto oferuje szeroki zakres obiektów uzdrowiskowych, w tym sanatoria głównie dla dzieci, szpitale, domy wypoczynkowe oraz pijalnię wód mineralnych. Rabka-Zdrój specjalizuje się w terapii schorzeń oddechowych, kardiologicznych, alergii, reumatyzmu, problemów z układem nerwowym oraz cukrzycy, oferując pomoc zarówno dzieciom, jak i dorosłym.</x-text>
                     
                    </div>
                    <img src="{{asset('assets/images/1200/sanatorium-rabka-o-nas-2.webp')}}" alt="Rabka Zdrój"
                        class=" object-cover aspect-[3/2] shadow-md " loading="lazy">
                </div>
            </div>

        </x-container>
    </section>

    <x-map/>

</x-layouts.app>