<section class="pt-6 pb-6 lg:py-16">
    <x-container>

        {{-- heading --}}
        <x-heading-horizontal subheading="Echo Satysfakcji" heading="Recenzje Gości: Nasza Duma i Inspiracja">

            <x-text class="sm:pt-10">Naszym priorytetem jest zapewnienie komfortu i wyjątkowych wrażeń. Z dumą dzielimy
                się
                opiniami osób, które odwiedziły nasz hotel i doświadczyły naszej gościnności. Przeczytaj, co o nas
                mówią, i przekonaj się, dlaczego warto nas odwiedzić!</x-text>
            <x-rating source="google" rate="4.4" href="https://maps.app.goo.gl/an32GnmNGM2iRmn68"
                reviews="294 recenzji" />
        </x-heading-horizontal>

        {{-- loop --}}
        <div class="max-w-screen-2xl lg:mt-16 swiper testimonials-swiper">
            <div class="py-10 flex 
             swiper-wrapper
             ">

                @foreach ($testimonials as $testimonial)
                <x-testimonial-card :testimonial="$testimonial" />


                @endforeach

                
            </div>


        </div>


    </x-container>
</section>