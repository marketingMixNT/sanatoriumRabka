@props(['testimonial'])

<div class="bg-secondary-400 p-12 swiper-slide space-y-8">
    <div class="flex ">
        <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
        <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
        <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
        <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
        <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
    </div>
    <h2 class=" text-lg font-medium text-fontLight">{{$testimonial->name}}</h2>
    <x-text class="text-fontLight font-light">{{$testimonial->content}}</x-text>

</div>