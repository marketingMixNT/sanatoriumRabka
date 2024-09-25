


@props(['href', 'type' => '', 'class' => ''])

@php
$styles = $type === 'secondary'
? 'hover:bg-secondary-400 hover:text-fontLight'
: 'hover:bg-white hover:text-secondary-400';
@endphp

<a href="{{ $href }}" {{ $attributes }}
    class="{{ $class }} bg-primary-400 text-fontLight rounded-sm uppercase {{ $styles }} text-sm py-2.5 px-6 font-normal duration-300 shadow-md">
    {{ $slot }}
</a>