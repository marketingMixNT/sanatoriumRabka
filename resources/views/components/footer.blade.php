<footer class="bg-secondary-400 text-fontLight pt-16 py-20 sm:py-8">
    <x-container class="max-w-screen-xl space-y-12">
        {{-- top --}}
        <div class="flex flex-col lg:flex-row justify-center items-center gap-12 lg:gap-32">

            <div class="lg:w-1/4 flex justify-center items-center">

                <a href="{{route('home')}}"><img src="{{asset('assets/logo/logo--light.png')}}" alt="" class="w-56"></a>
            </div>

            <div class="flex flex-col lg:flex-row j gap-16 lg:w-3/4">

                <div class="sm:w-1/2 sm:mx-auto lg:w-1/3 space-y-6">
                    <h2 class="text-2xl ">Kontakt</h2>

                 
                        <x-nav.topbar-contact-box large href="https://maps.app.goo.gl/eegopHXqSU4dnwK28" text="ul. Na Banię 42 Rabka-Zdrój">
                            <x-lucide-map-pin class="size-5 group-hover:text-primary-400 duration-300" />
                        </x-nav.topbar-contact-box>
            
                        <x-nav.topbar-contact-box large href="tel:182677260" text="18 26 77 260">
                            <x-lucide-phone class="size-5 group-hover:text-primary-400 duration-300" />
                        </x-nav.topbar-contact-box>

                        <x-nav.topbar-contact-box large href="tel:+48885808965" text="+48 885 808 965">
                            <x-lucide-phone class="size-5 group-hover:text-primary-400 duration-300" />
                        </x-nav.topbar-contact-box>

                        <x-nav.topbar-contact-box large href="mailto:biuro@sanatorium-cegielski.pl"
                            text="biuro@sanatorium-cegielski.pl">
                            <x-lucide-mail class="size-5 group-hover:text-primary-400 duration-300" />
                        </x-nav.topbar-contact-box>
                    

                </div>

                <div class="sm:w-1/2 mx-auto lg:w-2/3 space-y-6">
                    <h2 class="text-2xl ">Dane</h2>
                    <p class="text-sm"> <span class="font-medium"> NIP:</span> 7352860047</p>
                    <p class="text-sm"> <span class="font-medium">Regon:</span>  123126384</p>
                    <p class="text-sm"> <span class="font-medium"> Konto Bankowe:</span> 38 1090 1838 0000 0001 4405 5047</p>
                    <p class="text-sm">wpisana do rejestru Przedsiębiorców KRS przez Sąd Rejonowy dla Krakowa – Śródmieścia w Krakowie,
                        Wydział XII KRS pod numerem 0000511678</p>
                </div>


            </div>

        </div>
        {{-- links --}}
        <div class="flex flex-col xs:flex-row justify-center items-center gap-8 border-t border-b py-3">
            <a href="{{route('privacy-policy')}}" class="text-sm hover:text-primary-400 duration-300">Polityka Prywatnosci</a>
            <a href="{{route('regulations')}}" class="text-sm hover:text-primary-400 duration-300">Regulamin</a>
        </div>
        {{-- bottom --}}
        <div class="flex flex-col xs:flex-row gap-6 xs:gap-0 justify-between items-center">
            <div class="text-sm"><p>© <span id="footerYear"></span> Sanatorium Cegielski</p></div>
            <a href="https://marketingmix.pl" target="_blank" rel="norefferrer nofollow" aria-label="marketingmix.pl">
            <img src="{{asset('assets/marketingmix.svg')}}" class="w-40 hover:scale-105 duration-500"  /></a>
        </div>
    </x-container>
</footer>