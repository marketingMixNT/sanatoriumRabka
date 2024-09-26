@props(["class" => ""])

<button
    class="{{$class}} filter-btn border bg-primary-400 text-fontLight rounded-sm uppercase text-sm py-2.5 px-6 font-normal duration-300 shadow-md hover:bg-secondary-400 hover:text-fontLight "
    {{$attributes}}>
    {{$slot}}
</button>