<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordered Details | Roastly</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-20 py-8 bg-[#FEFDF8]">
    <header class="flex items-start">
        <button onclick="history.back()">
            <img src="{{ asset('icon/arrow-left.png') }}" alt="" class="w-8 h-8">
        </button>
        <div class="w-full flex flex-col items-center mb-10">
            <h1 class="text-4xl font-bold text-[#402F0B]">@yield('nameMenu')</h1>
            <h1 class="text-xl font-bold text-[#B97D0E]">price: @yield('price')</h1>
        </div>
    </header>
    <main class="my-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 *:h-[30rem]">
            <div class="bg-white p-6 rounded-lg shadow-md flex justify-center">
                @yield('image')
            </div>
            <div class="bg-white col-span-2 p-6 rounded-lg shadow-md flex flex-col justify-between">
                <p class="text-sm">@yield('description')</p>
                <div>
                    <!-- Pilihan Ukuran -->
                    <div class="mb-4">
                        <p class="font-semibold mb-2">Size :</p>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="size" class="form-checkbox text-orange-900 rounded-md">
                                Small
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="size" class="form-checkbox text-orange-900 rounded-md">
                                Medium
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="size" class="form-checkbox text-orange-900 rounded-md">
                                Large
                            </label>
                        </div>
                    </div>
                    <!-- Pilihan Gula -->
                    <div class="mb-4">
                        <p class="font-semibold mb-2">Sugar:</p>
                        <div class="flex gap-x-12">
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="sugar" class="form-checkbox text-orange-900 rounded-md ">
                                Less
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="sugar" class="form-checkbox text-orange-900 rounded-md">
                                Normal
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="sugar" class="form-checkbox text-orange-900 rounded-md">
                                Extra
                            </label>
                        </div>
                    </div>
                    <!-- Pilihan Es -->
                    <div class="mb-6">
                        <p class="font-semibold mb-2">Ice Cube:</p>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="ice" class="form-checkbox text-orange-900 rounded-md">
                                Less
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="ice" class="form-checkbox text-orange-900 rounded-md">
                                Normal
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="ice" class="form-checkbox text-orange-900 rounded-md">
                                Extra
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Tombol -->
                <div class="flex justify-end gap-4">
                    <button
                        class="px-6 py-2 border border-yellow-600 text-yellow-600 rounded-full hover:bg-yellow-100 transition">ADD
                        TO CART</button>
                    <button onclick="window.location.href='/menu/payment_order'" class="px-6 py-2 bg-yellow-700 text-white rounded-full hover:bg-yellow-800 transition">BUY
                        NOW</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
