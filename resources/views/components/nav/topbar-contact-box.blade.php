@props(['href', 'text',"large" => false,'class' => ''])

<div class="flex justify-start items-center {{$large ? 'gap-3':'gap-1'}} group">
    {{$slot}}
    <a href="{{$href}}" target="_blank" rel="norefferrer nofollow"
        class=" {{$large?'text-sm':'text-xs'}} {{$large?'group-hover:text-primary-400':'group-hover:text-secondary-400'}} duration-300 ">{{$text}}</a>
</div>