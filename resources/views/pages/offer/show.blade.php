<x-layouts.app title="{{$offer->getMetaTitle()}}" description="$offer->getMetaDesc()">

    {{-- header --}}
    <x-header title="{{$offer->title}}" bgi="{{asset('storage/'.$offer->banner_img)}}" />

    {{-- section --}}
    <section class="pt-12 lg:pt-24 ">

        <x-container class="max-w-screen-xl">

            {{-- heading --}}
            <x-heading-horizontal subheading="{{$offer->subheading}}" heading="{{$offer->heading}}">
                <div class="lg:pt-10 flex flex-col gap-8 ">
                    <div class="prose">

                        {!! $offer->short_desc !!}
                    </div>

                    <x-link-button type="secondary" class="self-start" href="{{$offer->reservation_link}}"
                        target="_blank" rel="noreferrer nofollow">Zarezerwuj</x-link-button>
                </div>
            </x-heading-horizontal>

            {{-- top --}}


            <div class="flex flex-col  justify-center items-center text-center  gap-4 w-full mt-10 lg:mt-20">
                <p class="text text-xl flex flex-col lg:flex-row justify-center lg:gap-3">Oferta ważna od <span class="font-semibold">{{
                        $offer->published_at->format('d-m-Y') }}</span>
                    do <span class="font-semibold">{{ $offer->published_end->format('d-m-Y') }} </span></p>

            </div>


            {{-- content --}}
            <div class="flex flex-col lg:flex-row mt-12 lg:mt-20 gap-12 lg:gap-0">

                <div class="w-full lg:w-[60%] lg:pr-20 description order-1 lg:order-none prose">{!! $offer->description
                    !!} </div>


                <div class="w-full  lg:w-[40%] relative "><img src="{{ asset('storage/' . $offer->thumbnail) }}"
                        alt="{{ $offer->title}}" width="576" height="384"
                        class="sticky top-32 aspect-square object-cover"></div>
            </div>

        </x-container>
    </section>
    <x-facebook-banner />
</x-layouts.app>