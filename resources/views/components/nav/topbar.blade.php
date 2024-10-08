<div class="w-full bg-white hidden md:flex justify-between items-center py-3 px-6 max-w-screen-max mx-auto">
    {{-- contact --}}
    <div class="flex justify-start items-center gap-8">
        <x-nav.topbar-contact-box
            href="https://www.google.com/maps/place/O%C5%9Brodek+Sanatoryjno-Wypoczynkowy+CEGIELSKI/@49.6139092,19.9607859,17z/data=!3m1!4b1!4m6!3m5!1s0x47160a856b5b746b:0xf12a286c5965a592!8m2!3d49.6139092!4d19.9633608!16s%2Fg%2F1thk7gv4?entry=tts"
            text="Rabka-Zdrój ul. Na Banię 42">
            <x-lucide-map-pin class="text-secondary-400 size-4 group-hover:text-primary-400 duration-300" />
        </x-nav.topbar-contact-box>

        <x-nav.topbar-contact-box href="mailto:biuro@sanatoriumrabka.pl" text="biuro@sanatoriumrabka.pl">
            <x-lucide-mail class="text-secondary-400 size-4 group-hover:text-primary-400 duration-300" />
        </x-nav.topbar-contact-box>

        <x-nav.topbar-contact-box href="tel:182677260" text="18 267-72-60">
            <x-lucide-phone class="text-secondary-400 size-4 group-hover:text-primary-400 duration-300" />
        </x-nav.topbar-contact-box>

    </div>
    {{-- socials --}}
    <div class="flex justify-start items-center gap-4">
        <a href="https://www.facebook.com/cegielski.sanatorium" target="_blank" rel="norefferrer nofollow"
            aria-label="facebook">
            <x-lucide-facebook class="text-secondary-400 size-4 hover:text-primary-400 duration-300" />
        </a>
        <a href="https://www.instagram.com/sanatorium.cegielski/" target="_blank" rel="norefferrer nofollow"
            aria-label="instagram">
            <x-lucide-instagram class="text-secondary-400 size-4 hover:text-primary-400 duration-300" />
        </a>
    </div>

</div>