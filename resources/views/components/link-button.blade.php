@props(['href'])

<a href="{{$href}}" {{$attributes}} class="rounded-sm uppercase bg-primary-400 text-fontLight text-sm py-2.5 px-6 hover:bg-white hover:text-secondary-400 font-normal duration-300">{{$slot}}</a>