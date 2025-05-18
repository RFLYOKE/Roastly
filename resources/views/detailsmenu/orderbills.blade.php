<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordered Bills | Roastly</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-20 py-8 bg-[#FEFDF8]">
    <header class="flex items-start">
        <button onclick="history.back()">
            <img src="{{ asset('icon/arrow-left.png') }}" alt="" class="w-8 h-8">
        </button>
        <div class="w-full flex flex-col items-center mb-10">
            <h1 class="text-xl font-bold text-[#B97D0E]">Checkout your Orders</h1>
            <h1 class="text-4xl font-bold text-[#402F0B]">Shopping Cart</h1>
        </div>
    </header>
    <main class="my-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 min-h-screen">
            <div class="col-span-2">
                <!-- Produk -->
                <div class="flex flex-col w-full gap-4">
                    <!-- Header -->
                    <div
                        class="flex items-center justify-between bg-yellow-700 text-white font-semibold rounded-lg px-8 py-3 shadow-md">
                        <div class="w-1/3">Product</div>
                        <div>Price</div>
                        <div>Quantity</div>
                        <div>Subtotal</div>
                    </div>

                    @for ($i = 0; $i < 4; $i++)
                        <div
                            class="flex justify-between items-center bg-white text-[#B97D0E] font-medium rounded-lg px-6 py-3 shadow-md">
                            <!-- Product -->
                            <div class="w-1/3 flex items-center">
                                <img src="{{ asset('img/coffeeTest.png') }}" alt="Hazelnut Latte"
                                    class="w-20 h-20 rounded-full object-cover" />
                                <p>Hazelnut Latte</p>
                            </div>
                            <div>Rp 25.000</div>
                            <div>
                                <div
                                    class="flex items-center justify-center gap-2 bg-gray-100 rounded-full px-4 py-1 w-fit">
                                    <button class="text-[#B97D0E] font-bold text-lg">+</button>
                                    <span class="px-3 border-x border-gray-300">1</span>
                                    <button class="text-[#B97D0E] font-bold text-lg">-</button>
                                </div>
                            </div>
                            <div>Rp 25.000</div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Ringkasan Order -->
            <div class="md:h-[23rem] bg-white rounded-lg px-6 pt-6 shadow-md">
                <h2 class="text-lg font-semibold mb-4">Order Summary</h2>
                <div class="space-y-2 text-sm text-gray-700">
                    <div class="flex justify-between">
                        <span>Items</span>
                        <span>4</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sub Total</span>
                        <span>Rp 100.000</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Shipping</span>
                        <span>Rp 0</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Taxes</span>
                        <span>Rp 0</span>
                    </div>
                    <hr>
                    <div class="flex justify-between font-semibold text-[#B97D0E]">
                        <span>Total</span>
                        <span>Rp 100.000</span>
                    </div>
                </div>

                <button
                    class="mt-10 w-full bg-yellow-700 text-white font-semibold py-2 rounded-full">
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </main>
</body>

</html>
