<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu | Roastly</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-12 pt-0 pb-2 bg-[#FEFDF8]">
    <header class="w-full text-center fixed top-0 left-0 pt-8 bg-[#FEFDF8]">
        <h1 class="text-xl font-bold text-[#B97D0E]">OUR MENU</h1>
        <h1 class="text-4xl font-bold text-[#402F0B]">Find Your Favorite Cup</h1>
        @php
            $menus = [
                'All' => 'menu',
                'Signature' => 'menu/signature',
                'Coffee' => 'menu/coffee',
                'Milk Based' => 'menu/milk',
                'Frappe' => 'menu/frappe',
                'Dessert' => 'menu/dessert',
                'Tea' => 'menu/tea',
            ];
        @endphp

        <nav class="pt-10">
            <ul class="flex items-center justify-center gap-x-4">
                @foreach ($menus as $label => $url)
                    <li>
                        <a href="/{{ $url }}"
                            class="py-2 px-8 shadow-md rounded-lg text-md font-semibold transition hover:bg-[#402F0B] hover:text-white {{ request()->is($url) ? 'bg-[#402F0B] text-white' : 'bg-white text-[#402F0B]' }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

    </header>
    <main class="flex items-center justify-center mt-56 w-full">
        <div class="flex flex-wrap items-center justify-center w-3/4 gap-4">
            @yield('content')
        </div>
    </main>
</body>

</html>
