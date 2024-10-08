@props(['href'])

<li>
    <a href="{{$href}}" class="hover:text-primary-400 duration-300">{{$slot}}</a>
</li>