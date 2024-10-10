{{-- Testimonial Card --}}
@props(['testimonial'])

<div class="bg-secondary-400 py-12 px-6 sm:p-12 flex flex-col space-y-8 swiper-slide shadow-md" style="height:auto">
    <div class="flex items-center mb-4 ">
        <div class="flex">
            <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
            <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
            <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
            <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
            <x-lucide-star class="size-5 text-yellow-500 fill-yellow-500" />
        </div>
        <h2 class="text-lg font-medium text-fontLight ml-2">{{$testimonial->name}}</h2>
    </div>
    <x-text class="text-fontLight font-light flex-grow">{{$testimonial->content}}</x-text>
</div>
