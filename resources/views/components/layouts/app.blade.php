@props(['title', 'description', 'noFollow' => false])

<!DOCTYPE html>
<html lang="pl" class="scroll-smooth scroll-pt-20">

<head>
    @include('partials.meta')
    @include('partials.fonts')
    @include('partials.favicon')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white font-text font-light h-full ">



    <x-nav.topbar />
    <x-nav.navbar />



    {{ $slot }}

    <x-map />
    <x-footer />
    <x-mobile-buttons />

    <script src="https://wis.upperbooking.com/sanatoriumcegielskirabkazdroj/be-panel?locale=pl" async=""></script>
</body>

</html>