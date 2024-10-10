@props(['subheading', 'heading'])

<div class="flex flex-col lg:flex-row justify-between items-start   max-w-screen-xl gap-6 lg:gap-0 mx-auto">

    <div class="lg:w-1/2 space-y-4 ">
        <span class="text-primary-400">{{$subheading}}</span>
        <h2 class="text-secondary-400 text-4xl sm:text-5xl font-medium mr-14">{{$heading}}</h2>
    </div>
    <div class="lg:w-1/2">
        {{$slot}}
        
    </div>
</div>