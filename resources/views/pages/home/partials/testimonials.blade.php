<section class="py-20">
    <x-container>

        {{-- heading --}}
        <x-heading-horizontal subheading="Echo Satysfakcji" heading="Recenzje Gości: Nasza Duma i Inspiracja">

            <x-text class="pt-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, accusantium! Dolores
                laudantium est
                iure explicabo ullam unde saepe reprehenderit nisi!</x-text>
            <x-rating source="google" rate="4.5" href="https://www.booking.com/hotel/pl/willa-pod-scieta-lipa.pl.html"
                reviews="12 recenzji" />
        </x-heading-horizontal>

        {{-- loop --}}
        <div class="max-w-screen-2xl mt-16 swiper testimonials-swiper">
            <div class="py-10  swiper-wrapper">

                {{-- @foreach ($attractions as $attraction) --}}
                <x-testimonial-card author="Marian Paździoch">Pobyt fantastyczny, jedzenie bardzo smaczne ,miła Pani
                    Ewa obsługująca w kawiarni i super
                    Wieczorki
                    taneczne ,do muzyki na żywo w wykonaniu Ediego. Serdecznie polecam!</x-testimonial-card>
                <x-testimonial-card author="Marian Paździoch">Pobyt fantastyczny, jedzenie bardzo smaczne ,miła Pani
                    Ewa obsługująca w kawiarni i super
                    Wieczorki
                    taneczne ,do muzyki na żywo w wykonaniu Ediego. Serdecznie polecam!</x-testimonial-card>
                <x-testimonial-card author="Marian Paździoch">Pobyt fantastyczny, jedzenie bardzo smaczne ,miła Pani
                    Ewa obsługująca w kawiarni i super
                    Wieczorki
                    taneczne ,do muzyki na żywo w wykonaniu Ediego. Serdecznie polecam!</x-testimonial-card>
                <x-testimonial-card author="Marian Paździoch">Pobyt fantastyczny, jedzenie bardzo smaczne ,miła Pani
                    Ewa obsługująca w kawiarni i super
                    Wieczorki
                    taneczne ,do muzyki na żywo w wykonaniu Ediego. Serdecznie polecam!</x-testimonial-card>






                {{-- @endforeach --}}
            </div>


        </div>




    </x-container>
</section>