@props(['offer'])

<div
    class="  border-gray-400 flex flex-col lg:flex-row justify-between  border-b py-16 gap-4 lg:gap-12  last-of-type:border-none">
    <div class="w-full lg:w-[40%]">
        <div class="overflow-hidden">

            <img src=" {{ asset('/storage/' . $offer->thumbnail) }}"
                alt="Zdjęcie apartamentu {{ $offer->title }} w hotelu Jan w Krakowie" loading="lazy"
                class="w-full h-[350px] object-cover">
        </div>
    </div>
    <div class="w-full lg:w-[60%] flex flex-col justify-between items-start py-8 gap-8 lg:gap-0">

        <h2 class=" text-4xl uppercase  font-heading font-light ">{{ $offer->title }}</h2>
        <div class="text 2xl:mr-12 leading-loose font-light text-[14px] 2xl:text-base">{!! $offer->short_desc !!}</div>

        <div class="flex justify-end items-end w-full gap-12">

            <a href="/">zobacz</a>
            <a href="/">zarezerwuj</a>
        </div>

    </div>
  
</div>