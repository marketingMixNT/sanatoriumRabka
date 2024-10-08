@props(['attraction'])

<div class="text-center space-y-6 swiper-slide">

    <img src="{{'storage/' . $attraction->image}}" alt="{{$attraction->name}}"
        class=" h-full w-full object-cover aspect-[5/4] shadow-md" loading="lazy">
    <h2 class="text-lg 2xl:text-2xl uppercase font-normal">{{$attraction->name}}</h2>
</div>