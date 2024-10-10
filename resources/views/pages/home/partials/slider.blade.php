<div class="swiper hero-carousel relative w-full  h-[calc(100vh-90px)] md:h-[calc(100vh-134px)]">
    <div class="swiper-wrapper">

        {{-- SLIDES --}}
        @foreach ($slides as $slide)
        {
        <div class="swiper-slide relative w-full h-full ">
            <div class="max-w-screen-xl mx-auto flex justify-start items-center h-full pb-24 px-6 md:px-12 2xl:px-0">
                <div
                    class="h-full  max-w-[600px] flex flex-col justify-center items-start gap-8  z-10 text-fontLight px-6 lg:px-0 pt-12 sm:pt-0">
                    <h1 class="text-4xl sm:text-5xl font-medium">{{$slide->heading}}</h1>
                    <p class="text-base">{{$slide->text}}</p>
                    <x-link-button href="{{$slide->link}}">{{$slide->button_text}}</x-link-button>
                </div>
            </div>

            <img src="{{asset('storage/' .  $slide->image)}}" alt="{{$slide->alt}}"
                class="absolute inset-0 w-full h-full object-cover" />

            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        }
        @endforeach


        {{-- RESERVATION PANEL --}}
        <div
            class="be-panel hidden md:block absolute bottom-40 md:bottom-20  2xl:bottom-40 left-0 right-0 md:mx-6  lg:mx-32 2xl:mx-0 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 bg-white">
        </div>
      



        {{-- ANCHOR --}}
        <a href="#o-nas" class=" absolute bottom-6 2xl:bottom-12 left-1/2 transform -translate-x-1/2 z-50 sm:hidden 2xl:block"
            aria-label="Przejdź do sekcji o nas">

            <x-lucide-arrow-down-circle class="animate-pulse w-8 md:w-12 text-white" />


        </a>
    </div>
</div>