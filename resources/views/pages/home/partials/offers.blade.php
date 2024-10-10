<section class="py-12 lg:pt-20 pb-10">
    <x-container>

        {{-- heading --}}
        <x-heading-horizontal subheading="Oferty specjalne" heading="Sprawdź nasze oferty">
            <x-text class="sm:pt-10">
                Poznaj nasze starannie
                dobrane oferty, które zapewnią Ci nie tylko
                regenerację i relaks, ale także skuteczną opiekę zdrowotną. W Sanatorium Cegielski każdy pobyt to
                droga do lepszego samopoczucia, w otoczeniu spokojnych gór i profesjonalnej opieki.</x-text>
        </x-heading-horizontal>


        {{-- offers loop --}}
        <div class=" flex flex-wrap justify-center items-center max-w-[1600px] mx-auto gap-10 mt-12 lg:mt-24">
            @foreach ($offers as $offer)

            <x-offer-card :offer="$offer" href="{{route('offer.show',$offer->slug)}}" />
            @endforeach

        </div>

    </x-container>
</section>