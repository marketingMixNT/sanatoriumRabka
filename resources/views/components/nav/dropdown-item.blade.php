@props(['href'])



<li><a href="{{$href}}"
    class=" my-2 block border-b border-gray-100 py-1 text-fontDark hover:text-secondary-400 md:mx-2">
    {{$slot}}
  </a></li>