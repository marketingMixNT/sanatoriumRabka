<x-layouts.app title="{{$room->getMetaTitle()}}" description="{{$room->getMetaDesc()}}">

    {{-- header --}}
    <x-header title="Pokój {{$room->title}}" bgi="{{asset('storage/' . $room->thumbnail)}}" />

    {{-- section --}}
    <section class="py-12 lg:pt-24 pb-12">

        <x-container>


            {{-- heading --}}
            <x-heading-horizontal subheading="Komfort i Spokój w Górach
" heading="Pokój typu {{$room->title}}">
                <x-text class="sm:pt-10">
                    {{$room->short_desc}}</x-text>

            </x-heading-horizontal>

        </x-container>
    </section>


    {{-- description --}}
    <section class="pt-6 pb-6 lg:py-20">
        <x-container class="max-w-screen-xl mx-auto">

            <div class="flex flex-col lg:flex-row gap-y-12">
                <div class="w-full lg:w-[45%]   sticky top-28 space-y-6 h-full order-1 lg:order-none">

                    <div class="prose max-w-full font-light">

                        {!! $room->description !!}
                    </div>

                </div>
                <div class="w-full lg:w-[55%] flex flex-col gap-y-12 relative lg:pl-20 ">


                    @foreach (collect($room->gallery)->slice(0, 3) as $img)
                    <img src="{{ asset('storage/' . $img) }}" alt="zdjęcie przedstawiające {{ $room->title }} w Sanatorium Cegielski"
                        class="w-full  aspect-square max-h-[500px] object-cover shadow-md" loading="lazy">
                    @endforeach

                </div>
               
            </div>

        </x-container>
    </section>

    {{-- gallery --}}
    <section class="pt-6 lg:py-20 ">

        {{-- heading --}}
        <div class="max-w-screen-xl mx-auto  px-6 md:px-12 2xl:px-0 text-center pb-4">
            <h2 class="text-4xl sm:text-5xl 2xl:text-6xl tracking-wider font-heading font-extralight ">
                Galeria
            </h2>

        </div>

        {{-- swiper --}}
        <div class="swiper room-gallery-swiper">
            <div class="py-10  swiper-wrapper">

                @foreach ($room->gallery as $img)
                <a href="{{ asset('storage/' . $img) }}" class=" swiper-slide glightbox">

                    <img src="{{ asset('storage/' . $img) }}"
                        alt="zdjęcie przedstawiające  {{ $room->title }} w Sanatorium Rabka"
                        class=" h-full w-full object-cover aspect-square shadow-md" loading="lazy">
                </a>
                @endforeach
            </div>


        </div>
    </section>

    <x-map/>


</x-layouts.app>