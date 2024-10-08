<a href="{{ $href }}" {{$attributes}}
class="border-r border-t border-fontWhite last-of-type:border-r-0  bg-secondary-400 first-of-type:bg-primary-400 first-of-type:hover:bg-accent-200 hover:bg-secondary-400 transition-colors duration-500 first-of-type:text-fontLight text-fontLight ">
<div class="flex flex-col justify-center items-center py-2 gap-2">
    
    {{$slot}}
</div>
</a>