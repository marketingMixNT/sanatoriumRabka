@props(['subheading', 'heading','text'])

<div class="flex flex-col lg:flex-row justify-between items-center  gap-16">
    <div class="lg:w-1/2  grid sm:grid-cols-2 gap-12 order-1 lg:order-none">
        {{$slot}}
    </div>
    <div class="lg:w-1/2 flex flex-col justify-start items-start gap-4">
        <span class="text-primary-400">{{$subheading}}</span>
        <h2 class="text-secondary-400 text-4xl sm:text-5xl font-medium pb-6">{{$heading}}</h2>
        <x-text >{{$text}}</x-text>
    </div>

</div>