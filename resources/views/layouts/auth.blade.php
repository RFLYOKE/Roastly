<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative w-full h-screen"
        style="background-image: url('{{ asset('img/hero.jpg') }}');
        background-size: contain;
        background-position: center
        background-repeat: no-repeat">
        <div class="absolute inset-0 bg-white opacity-60"></div>
        <div class="absolute inset-0 bg-linear-to-r from-black/50 to-black/70"></div>

        <div class="absolute inset-0">
            @yield('content')
        </div>
    </div>
</body>

</html>
