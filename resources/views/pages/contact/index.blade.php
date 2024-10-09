<x-layouts.app title="Kontakt – Sanatorium Cegielski Rabka-Zdrój" description="Skontaktuj się z Sanatorium Cegielski w Rabce-Zdrój. Znajdź nasze dane kontaktowe, formularz oraz lokalizację, aby uzyskać więcej informacji o naszych usługach.">

    {{-- header --}}
    <x-header title="Kontakt"
        bgi="{{asset('assets/images/sanatorium-rabka-3.webp')}}" />

    {{-- section --}}
    <section class="pt-12 lg:pt-24 ">

        <x-container class="max-w-screen-xl ">


            {{-- heading --}}
            <x-heading-horizontal subheading="Skontaktuj się z nami"
                heading="Jesteśmy tutaj, aby odpowiedzieć na Twoje pytania">
                <x-text class="pt-10">
                    Jeśli masz pytania, sugestie lub potrzebujesz informacji, możesz do nas zadzwonić, napisać e-mail,
                    odwiedzić nas osobiście lub skorzystać z formularza kontaktowego. Wypełnij pola poniżej, a
                    skontaktujemy się z Tobą jak najszybciej. Każde zapytanie traktujemy z uwagą i chętnie odpowiemy na
                    wszystkie Twoje pytania</x-text>

            </x-heading-horizontal>

            <!--CONTENT-->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 pt-12 lg:pt-24 ">

                <div class="order-1 lg:order-none">
                    {{-- <x-title>Hotel Jan</x-title> --}}
                    <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">

                        <x-contact-box title="E-mail">
                            <a class="text-lg font-light hover:text-primary-400 duration-300"
                                href="mailto:biuro@sanatoriumrabka.pl">biuro@sanatoriumrabka.pl</a>
                        </x-contact-box>

                        <x-contact-box title="Telefon">
                            <div class="flex flex-col">

                                <a class=" text-lg font-light mb-2 hover:text-primary-400 duration-300"
                                    href="tel:182677260">18 267-72-60</a>
                                <a class=" text-lg font-light hover:text-primary-400 duration-300"
                                    href="tel:+48885808965">885-808-965</a>
                            </div>
                        </x-contact-box>

                        <x-contact-box title="Adres">
                            <a class=" text-lg font-light hover:text-primary-400 duration-300"
                                href="https://maps.app.goo.gl/eeZPNKNhgv5SE2he8" target="_blank" rel="noreferrer nofollow">Na Banię 42<br>34-700 Rabka-Zdrój</a>
                        </x-contact-box>

                        <x-contact-box title="Social Media">


                            <div class="flex justify-start  items-center gap-3">
                                <a href="https://www.facebook.com/cegielski.sanatorium" target="_blank"
                                    rel="norefferer nofollow">
                                    <x-lucide-facebook class="w-6 hover:scale-110 duration-300" />
                                </a>

                                <a href="https://www.instagram.com/sanatorium.cegielski/" target="_blank"
                                    rel="norefferer nofollow">
                                    <x-lucide-instagram class="w-6 hover:scale-110 duration-300" />
                                </a>

                            </div>
                        </x-contact-box>

                    </div>


                </div>



                <livewire:contact-form />



        </x-container>
    </section>

    <x-facebook-banner/>
</x-layouts.app>