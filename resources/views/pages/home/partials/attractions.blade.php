<section class="py-20">

    <x-container>
          {{-- heading --}}

          <x-heading title="Odkryj Atrakcje Sanatorium Cegielski" subtitle="Różnorodność Rozrywek dla Ciała i Ducha">W Sanatorium Cegielski, atrakcje sięgają daleko poza granice tradycyjnego wypoczynku. Nasze udogodnienia oferują zarówno relaksacyjne jak i aktywne formy spędzania czasu, dostosowane do różnych potrzeb i zainteresowań Gości. Od spokojnych spacerów po malowniczych ścieżkach, przez sesje jogi z widokiem na góry, po kreatywne warsztaty i kulturalne wieczory – tu każdy znajdzie coś dla siebie. Przygotuj się na niezapomniane chwile w otoczeniu natury i kultury, które wzbogacą Twój pobyt u nas.</x-heading>

         
        {{-- loop --}}
        <div class="mt-16 swiper attraction-gallery-swiper px-6">
            <div class=" swiper-wrapper">

                {{-- @foreach ($attractions as $attraction) --}}
                
                <x-attraction-card />
                <x-attraction-card />
                <x-attraction-card />
                <x-attraction-card />
             
               
               
               
                {{-- @endforeach --}}
            </div>


        </div>
    </x-container>

</section>