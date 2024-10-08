<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<meta name="keywords" content="Sanatorium Rabka-Zdrój, kuracje zdrowotne, rehabilitacja, wypoczynek w górach, sanatorium w Rabce, leczenie sanatoryjne, zdrowie, relaks, zabiegi rehabilitacyjne, turnusy zdrowotne, Rabka-Zdrój sanatorium, wypoczynek uzdrowiskowy.">
<meta name="author" content="Sanatorium Rabka">

@if ($noFollow)
    <meta name="robots" content="noindex, nofollow">
@else
    <meta name="robots" content="index, follow">
@endif

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://www.sanatoriumrabka.pl">
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('assets/images/sanatorium-rabka-2.webp')}}">