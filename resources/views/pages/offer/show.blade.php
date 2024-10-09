<x-layouts.app title="{{$offer->getMetaTitle()}}" description="$offer->getMetaDesc()">

    {{-- header --}}
    <x-header title="{{$offer->title}}"
        bgi="{{asset('storage/'.$offer->banner_img)}}" />

    {{-- section --}}
    <section class="py-12 lg:pt-24 pb-12">

        <x-container class="max-w-screen-xl">

            {{-- heading --}}
            <x-heading-horizontal subheading="Komfort i Piękno Natury na Wyciągnięcie Ręki"
                heading="Sanatorium Cegielski Twoja Oaza Spokoju w Rabce-Zdrój">
                <div class="pt-10">

                    {!! $offer->short_desc !!}
                </div>
            </x-heading-horizontal>

            {{-- top --}}


            <div class="flex flex-col  justify-center items-center text-center  gap-4 w-full  mt-20">
                <p class="text">Oferta ważna od <span class="font-semibold">{{
                        $offer->published_at->format('d-m-Y') }}</span>
                    do <span class="font-semibold">{{ $offer->published_end->format('d-m-Y') }} </span></p>

            </div>


            {{-- content --}}
            <div class="flex flex-col lg:flex-row mt-16 lg:mt-32">

                <div class="w-full lg:w-[60%] lg:pr-20 description order-1 lg:order-none">{!! $offer->description
                    !!} </div>


                <div class="w-full lg:w-[40%] relative "><img src="{{ asset('storage/' . $offer->thumbnail) }}"
                        alt="{{ $offer->title}}" width="576" height="384" class="sticky top-32"></div>
            </div>

        </x-container>



        {{-- <div
            class="flex flex-col lg:flex-row justify-center items-center gap-x-16 pt-20 px-2 sm:w-[90%] md:w-full mx-auto">

            @foreach ($otherOffers as $offer)

            <x-offer-card :offer="$offer" href="/" />

            @endforeach

        </div> --}}
    </section>
    <x-facebook-banner />
</x-layouts.app>