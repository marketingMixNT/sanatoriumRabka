<x-layouts.app title="{{$page->meta_title}}" description="{{$page->meta_desc}}">



    {{-- HEADER --}}
    <x-header title="{{$page->title}}" bgi="{{asset('storage/' . $page->banner_img)}}" />

    <section class="py-24">

        <x-container class="max-w-screen-xl">
            {{-- CONTENT --}}
            <div class="prose max-w-full">

                {!! tiptap_converter()->asHTML($page->description) !!}
            </div>

        </x-container>
    </section>


</x-layouts.app>