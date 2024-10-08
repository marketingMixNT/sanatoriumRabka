<section id="o-nas" class="pt-6 pb-12 sm:py-20">
    <x-container class="max-w-screen-xl  ">

        {{-- heading --}}
        <x-heading-horizontal-images subheading="Zdrowie i Relaks w Harmonii z Naturą"
            heading="Sanatorium Cegielski: Twoje Centrum Regeneracji"
            text="W Sanatorium Cegielski, położonym w sercu gór, zapewniamy kompleksową opiekę zdrowotną w otoczeniu naturalnego piękna. Nasze terapie łączą tradycyjne metody leczenia z nowoczesnymi podejściami, by oferować każdemu Gościowi spersonalizowany plan regeneracji.">
            <img src="{{asset('assets/images/o-nas/sanatorium-rabka-5.webp')}}"
                alt="wnętrze pokoju w Sanatorium Rabka" class="h-full w-full object-cover aspect-square shadow-md rounded-sm" loading="lazy">
            <img src="{{asset('assets/images/o-nas/sanatorium-rabka-2.webp')}}"
                alt="wnętrze pokoju w Sanatorium Rabka" class="h-full w-full object-cover aspect-square shadow-md rounded-sm" loading="lazy">
        </x-heading-horizontal-images>

        {{-- content --}}
        <div class="flex flex-col lg:flex-row justify-center items-center gap-16 mt-10 lg:mt-20">

            <div class="w-1/2 hidden lg:block">
                <img src="{{asset('assets/images/o-nas/sanatorium-rabka-1.webp')}}"
                    alt="widok z pokoju w Sanatorium Cegielski" class="shadow-md rounded-sm" loading="lazy">
            </div>
            <div class="lg:w-1/2 flex flex-col justify-start items-start gap-12">
                <div class="hidden sm:grid grid-cols-2 gap-12">
                    <img src="{{asset('assets/images/o-nas/sanatorium-rabka-4.webp')}}"
                        alt="wnętrze pokoju w Sanatorium Rabka" class="w-full h-full aspect-square object-cover shadow-md rounded-sm" loading="lazy">
                    <img src="{{asset('assets/images/o-nas/sanatorium-rabka-3.webp')}}"
                        alt="wnętrze pokoju w Sanatorium Rabka" class="w-full h-full aspect-square object-cover shadow-md rounded-sm" loading="lazy">
                </div>

                <x-text class="leading-relaxed">Nasze sanatorium to nie tylko miejsce leczenia, ale przestrzeń do
                    odzyskiwania harmonii ducha i
                    ciała. Dzięki indywidualnemu podejściu i wyjątkowej lokalizacji, oferujemy idealne warunki do
                    wypoczynku i zdrowienia w pełnym spokoju otoczeniu.</x-text>

                <x-link-button type="secondary" href="{{route('about')}}">Więcej informacji</x-link-button>
            </div>

        </div>

    </x-container>
</section>