@extends('layouts.app')

@section('title', 'Welcome to Traveling - Your Perfect Holiday Partner')

@section('content')
<div class="relative">
    <!-- Hero Banner -->
    <div class="relative h-screen bg-cover bg-center">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="container mx-auto h-full relative z-10">
            <div class="flex items-center justify-center h-full">
                <div class="text-center text-white">
                    <h1 class="text-5xl font-bold mb-4">Discover Your Perfect Destination</h1>
                    <p class="text-xl mb-8">Explore amazing holiday packages and create unforgettable memories</p>
                    <div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
                        <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <input type="text" class="w-full px-4 py-2 border rounded-md" placeholder="Where to?">
                            <input type="date" class="w-full px-4 py-2 border rounded-md" placeholder="Check-in">
                            <select class="w-full px-4 py-2 border rounded-md">
                                <option>Number of travelers</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3+</option>
                            </select>
                            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Destinations -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Popular Destinations</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach(['Paris, France', 'Bali, Indonesia', 'Dubai, UAE'] as $index => $destination)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('images/destination'.($index+1).'.jpg') }}" class="w-full h-48 object-cover" alt="Destination">
                    <div class="p-6">
                        <h5 class="text-xl font-semibold mb-2">{{ $destination }}</h5>
                        <p class="text-gray-600 mb-4">Experience the beauty and culture of {{ $destination }}</p>
                        <p class="text-blue-600 font-semibold mb-4">Starting from ${{ 799 + $index * 200 }}</p>
                        <a href="#" class="inline-block bg-white text-blue-600 border border-blue-600 py-2 px-4 rounded-md hover:bg-blue-600 hover:text-white transition duration-300">View Details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Special Offers</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach(['Early Bird Discount', 'Family Package'] as $index => $offer)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/3">
                            <img src="{{ asset('images/offer'.($index+1).'.jpg') }}" class="w-full h-full object-cover" alt="Offer">
                        </div>
                        <div class="md:w-2/3 p-6">
                            <h5 class="text-xl font-semibold mb-2">{{ $offer }}</h5>
                            <p class="text-gray-600 mb-2">
                                @if($index == 0)
                                    Book 60 days in advance and get 25% off
                                @else
                                    Kids stay free! Special family rates available
                                @endif
                            </p>
                            <p class="text-red-600 font-semibold mb-4">
                                @if($index == 0)
                                    Limited time offer!
                                @else
                                    Save up to 40%
                                @endif
                            </p>
                            <a href="#" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300">Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                @foreach([
                    ['icon' => 'fa-shield-alt', 'title' => 'Secure Booking', 'description' => '100% secure payment system'],
                    ['icon' => 'fa-dollar-sign', 'title' => 'Best Price', 'description' => 'Guaranteed best prices'],
                    ['icon' => 'fa-headset', 'title' => '24/7 Support', 'description' => 'Dedicated support team'],
                    ['icon' => 'fa-heart', 'title' => 'Travel Insurance', 'description' => 'Comprehensive coverage']
                ] as $feature)
                <div class="text-center">
                    <div class="mb-4">
                        <i class="fas {{ $feature['icon'] }} text-4xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h4>
                    <p class="text-gray-600">{{ $feature['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h3 class="text-2xl font-bold mb-4">Subscribe to Our Newsletter</h3>
                <p class="mb-6">Get the latest travel deals and updates straight to your inbox</p>
                <form class="flex justify-center">
                    <input type="email" class="px-4 py-2 w-64 rounded-l-md focus:outline-none text-gray-900" placeholder="Enter your email">
                    <button type="submit" class="bg-white text-blue-600 px-6 py-2 rounded-r-md hover:bg-gray-100 transition duration-300">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
