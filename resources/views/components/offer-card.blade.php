@props(['offer','href'])



    <a href="{{ $href }}" class="w-full sm:w-[550px] lg:w-[370px] border h-[370px] bg-blend-multiply bg-gray-500 flex justify-center items-end rounded-sm shadow-md relative group text-center"
    style="background-image: url('{{ asset('storage/' . $offer->thumbnail) }}')">
    <h2 class="text-fontLight text-3xl font-medium mb-12">{{ $offer->title }}</h2>
    <div class="absolute inset-0 bg-secondary-400 opacity-0 group-hover:opacity-95 duration-300 flex flex-col justify-center items-center p-6 text-fontLight">
        <h2 class="text-fontLight text-3xl font-medium mb-12">{{ $offer->title }}</h2>
        <div class="text-sm">{!! $offer->short_desc !!}</div>
    </div>
</a>

