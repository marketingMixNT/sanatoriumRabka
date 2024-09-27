@props(['id','title' ])

<button id="menu-{{$id}}" data-dropdown-toggle="{{$id}}"
    class="  rounded-sm   text-center inline-flex items-center  hover:text-primary-400 duration-300"
    type="button">{{$title}}<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 4 4 4-4" />
    </svg>
</button>

<!-- Dropdown menu -->
<div id="{{$id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-sm shadow w-44 ">
    <ul class="" aria-labelledby="menu-{{$id}}">
        {{$slot}}
    </ul>
</div>