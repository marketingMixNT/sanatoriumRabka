@props(['href'])

<a href="{{$href}}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-sm text-sm text-fontDark hover:bg-gray-100 focus:outline-none focus:bg-gray-100  " >
    {{$slot}}
  </a>