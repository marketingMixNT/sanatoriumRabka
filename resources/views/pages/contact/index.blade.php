<x-layouts.app title="Kontakt" description="kontakt">

    {{-- header --}}
    <x-header title="Kontakt"
        bgi="https://images.unsplash.com/photo-1726931598787-00b60840177c?q=80&w=4470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

    {{-- section --}}
    <section class="pt-24 pb-12">

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
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 ">

                <div class="order-1 lg:order-none">
                    {{-- <x-title>Hotel Jan</x-title> --}}
                    <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">

                        <x-contact-box title="E-mail">
                            <a class="text-xl font-light hover:text-primary-400 duration-300"
                                href="mailto:biuro@sanatoriumrabka.pl">biuro@sanatoriumrabka.pl</a>
                        </x-contact-box>

                        <x-contact-box title="Telefon">
                            <div class="flex flex-col">

                                <a class=" text-xl font-light mb-2 hover:text-primary-400 duration-300"
                                    href="tel:182677260">18 267-72-60</a>
                                <a class=" text-xl font-light hover:text-primary-400 duration-300"
                                    href="tel:+48885808965">885-808-965</a>
                            </div>
                        </x-contact-box>

                        <x-contact-box title="Adres">
                            <a class=" text-xl font-light hover:text-primary-400 duration-300"
                                href="https://maps.app.goo.gl/eeZPNKNhgv5SE2he8" target="_blank" rel="noreferrer nofollow">Na Banię 42<br>34-700 Rabka-Zdrój</a>
                        </x-contact-box>

                        <x-contact-box title="Social Media">


                            <div class="flex justify-start  items-center gap-3">
                                <a href="https://www.facebook.com/cegielski.sanatorium" target="_blank"
                                    rel="norefferer nofollow">
                                    <x-lucide-facebook class="w-8 hover:scale-110 duration-300" />
                                </a>

                                <a href="https://www.instagram.com/sanatorium.cegielski/" target="_blank"
                                    rel="norefferer nofollow">
                                    <x-lucide-instagram class="w-8 hover:scale-110 duration-300" />
                                </a>

                            </div>
                        </x-contact-box>

                    </div>


                </div>



                <livewire:contact-form />



        </x-container>
    </section>
</x-layouts.app>