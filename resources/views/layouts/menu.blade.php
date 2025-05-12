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
        <nav class="pt-10">
            <ul class="flex items-center justify-center gap-x-4">
                <li class="py-2 px-8 bg-[#402F0B] text-white rounded-lg font-semibold shadow-md"><a href="#">All</a></li>
                <li class="py-2 px-8 bg-white text-[#402F0B] rounded-lg font-semibold shadow-md"><a href="#">Signature</a></li>
                <li class="py-2 px-8 bg-white text-[#402F0B] rounded-lg font-semibold shadow-md"><a href="#">Coffee</a></li>
                <li class="py-2 px-8 bg-white text-[#402F0B] rounded-lg font-semibold shadow-md"><a href="#">Milk Based</a></li>
                <li class="py-2 px-8 bg-white text-[#402F0B] rounded-lg font-semibold shadow-md"><a href="#">Frappe</a></li>
                <li class="py-2 px-8 bg-white text-[#402F0B] rounded-lg font-semibold shadow-md"><a href="#">Dessert</a></li>
                <li class="py-2 px-8 bg-white text-[#402F0B] rounded-lg font-semibold shadow-md"><a href="#">Tea</a></li>
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