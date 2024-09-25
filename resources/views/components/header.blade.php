@props(['title'=>"",'bgi'=>""])

<header
    class="relative flex flex-col justify-center items-center h-[calc(80vh)]  lg:h-[calc(90vh)] 2xl:h-[calc(60vh)]  sm:mt-0 w-full bg-cover bg-center bg-fixed bg-gray-500 bg-blend-multiply text-fontLight"
    style="background-image: url({{$bgi}})">
    <!--HEADING-->
    <span class="mb-4 text-sm 2xl:text-base font tracking-widest uppercase ">Hotel Jan</span>
    <h1 class="text-center text-4xl sm:text-5xl md:text-7xl  tracking-wider uppercase font-heading ">
        {{$title}}
    </h1>


    {{-- RESERVATION PANEL --}}
    <div
        class="be-panel hidden md:block absolute bottom-24 left-0 right-0 md:mx-6  lg:mx-32 2xl:mx-0 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 bg-white">
    </div>
    <x-link-button class="md:hidden absolute mt-12 bottom-32 left-1/2 transform -translate-x-1/2"
        href="https://booking.profitroom.com/pl/aparthoteljan/home?currency=PLN" target="_blank" aria-label="Rezerwuj">
        Zarezerwuj</x-link-button>

</header>