@props(['href', 'text'])

<div class="flex justify-start items-center gap-1 group">
 {{$slot}}
    <a href="{{$href}}"
        target="_blank" rel="norefferrer nofollow"
        class="text-xs group-hover:text-secondary-400 duration-300">{{$text}}</a>
</div>