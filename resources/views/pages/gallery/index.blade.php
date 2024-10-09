<x-layouts.app title="Galeria – Sanatorium Cegielski Rabka-Zdrój" description="Zobacz galerię Sanatorium Cegielski w Rabce-Zdrój. Obejrzyj zdjęcia naszych ośrodków, malowniczego otoczenia oraz dostępnych zabiegów i udogodnień.">

    {{-- HEADER --}}
    <x-header title="Galeria"
        bgi="{{asset('assets/images/sanatorium-rabka-3.webp')}}" />

    {{-- MAIN --}}
    <section class="py-12 lg:py-24">
        <x-container class="max-w-[1600px]">

            <div class="flex justify-center items-center gap-4 flex-wrap mb-12">

                <x-button class=" gallery-btn filter-btn" data-title="">Wszystkie</x-button>
                
                @foreach ($images as $image)
                <x-button class="filter-btn" data-title="{{ $image->category }}"> {{ $image->category }}</x-button>
                @endforeach
            </div>


            <div class="grid  sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="image-gallery">
                @foreach ($images as $image)
                @foreach ($image->images as $img)
                <div class="w-full h-full object-cover image-item" data-title="{{ $image->category }}">
                    <a href="{{asset('storage/' .  $img)}}" class="glightbox">

                        <img src="{{asset('storage/' .  $img)}}"
                            alt="zdjęcie przedstawiające {{ $image->category }} w hotelu Jan w Krakowie" loading="lazy"
                            class="w-full object-cover aspect-square rounded-sm shadow-md">
                    </a>

                </div>
                @endforeach
                @endforeach
            </div>
        </x-container>
    </section>

<x-map/>

</x-layouts.app>