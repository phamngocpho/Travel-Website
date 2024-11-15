@extends('user.layouts.app')

@section('title', 'Wishlist')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-6">My Wishlist</h1>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-3 px-4 text-left w-1/2">Product</th>
                        <th class="py-3 px-4 text-right">Price</th>
                        <th class="py-3 px-4 text-center">Quantity</th>
                        <th class="py-3 px-4 text-right">Total</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-4 px-4">
                            <div class="flex items-center">
                                <div class="relative w-24 h-24 mr-4">
                                    <img src="https://i.pinimg.com/736x/70/35/00/703500d5da9cf9eb3d60e39844da7e5e.jpg" 
                                        alt="AULA F75 Keyboard" 
                                        class="w-full h-full object-cover rounded">
                                    <span class="absolute top-0 left-0 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-tl">Flash Sale</span>
                                </div>
                                <div>
                                    <h2 class="text-blue-600 font-semibold">AULA F75 Wireless Mechanical Keyboard</h2>
                                    <p class="text-sm text-gray-600">Hotswap Support - RGB LED Backlight</p>
                                    <span class="inline-block mt-1 text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">F87 Polar Grey Edition</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-right">
                            <div>
                                <p class="line-through text-gray-400 text-sm">$52.00</p>
                                <p class="font-bold text-red-600">$48.00</p>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <div class="flex items-center justify-center">
                                <button class="bg-gray-200 px-3 py-1 rounded-l">-</button>
                                <input type="text" value="1" class="w-12 text-center border-t border-b border-gray-200">
                                <button class="bg-gray-200 px-3 py-1 rounded-r">+</button>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-right font-bold">
                            $48.00
                        </td>
                        <td class="py-4 px-4 text-right">
                            <button class="text-red-500 hover:text-red-700 mr-4">Remove</button>
                            <button class="text-blue-500 hover:text-blue-700">Find Similar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
            
        <div class="bg-white rounded-lg shadow-md p-4 mb-6">
            <h2 class="text-lg font-semibold mb-2">Discount Code</h2>
            <div class="flex items-center">
                <input type="text" placeholder="Enter discount code" class="border rounded-l px-3 py-2 w-full">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-r hover:bg-orange-600 transition-colors duration-300">Apply</button>
            </div>
        </div>
            
        <div class="bg-white rounded-lg shadow-md p-4 mb-6">
            <h2 class="text-lg font-semibold mb-2">Order Summary</h2>
            <div class="flex justify-between items-center">
                <span>Subtotal:</span>
                <span class="font-bold">$48.00</span>
            </div>
            <div class="flex justify-between items-center mt-2">
                <span>Shipping Fee:</span>
                <span class="font-bold">$5.00</span>
            </div>
            <div class="flex justify-between items-center mt-2 text-xl font-bold">
                <span>Total:</span>
                <span class="text-red-600">$53.00</span>
            </div>
        </div>
            
        <div class="text-right">
            <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-red-600 transition-colors duration-300 text-lg font-semibold">
                Checkout
            </button>
        </div>
    </div>
@endsection