@props(['title', 'subtitle', 'slot'])

<div class="flex justify-between items-center max-w-screen-lg mx-auto">

    <div class=" space-y-4 text-center">
        <span class="text-primary-400">{{$title}}</span>
        <h2 class="text-secondary-400 text-4xl sm:text-5xl font-medium pb-6">{{$subtitle}}</h2>
        <x-text>{{$slot}}</x-text>
    </div>

</div>