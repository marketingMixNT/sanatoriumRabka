<x-layouts.app title="{{$page->meta_title}}" description="{{$page->meta_desc}}">




    {{-- HEADER --}}
    <x-header title="{{$page->page_title}}" bgi="{{asset('storage/' . $page->banner_img)}}" />

    <section class="pt-12 lg:pt-24 ">

        <x-container class="max-w-screen-xl">
            {{-- CONTENT --}}
            <x-prose>



                {!! tiptap_converter()->asHTML($page->content) !!}
            </x-prose>

        </x-container>
    </section>

    <x-facebook-banner />


</x-layouts.app>