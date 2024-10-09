<x-layouts.app title="Zabiegi Rehabilitacyjne i Relaksacyjne w Sanatorium Cegielski – Rabka-Zdrój"
    description="Odkryj naszą ofertę zabiegów rehabilitacyjnych i relaksacyjnych, w tym masaże, saunę i jacuzzi, które pomogą Ci w zdrowiu i regeneracji. Zarezerwuj swój pobyt w Sanatorium Cegielski w Rabce-Zdroju i ciesz się pełnią zdrowia!">

    {{-- header --}}
    <x-header title="Zabiegi" bgi="{{asset('assets/images/sanatorium-rabka-3.webp')}}" />


    {{-- section --}}
    <section class="py-12 sm:pt-24 pb-12">

        <x-container class="max-w-screen-xl">

            {{-- heading --}}
            <x-heading-horizontal subheading="Zabiegi dla Zdrowia i Urody" heading="Kompleksowa oferta terapeutyczna">
                <x-text class="sm:pt-10">
                    W sanatorium Cegielski oferujemy szeroki zakres usług dbających o zdrowie i piękno. Nasza oferta
                    obejmuje nie tylko terapie rehabilitacyjne, ale także relaksujące okłady, kąpiele z aromaterapią i
                    odprężające masaże. Pobyt w górskiej okolicy zachęca do aktywnej rekreacji, a po wyczerpujących
                    górskich wędrówkach zapraszamy do skorzystania z naszych dodatkowych zabiegów, które pomogą zachować
                    świetną formę i pełnię sił.</x-text>

            </x-heading-horizontal>


            <div class="pt-12 lg:pt-24 space-y-12 lg:space-y-24">

                @foreach ($treatments as $treatment)

              <x-treatment-card :treatment="$treatment"/>

                @endforeach


            </div>

        </x-container>
    </section>

    <x-facebook-banner/>

</x-layouts.app>