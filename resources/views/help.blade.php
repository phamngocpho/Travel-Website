@extends('layouts.app')

@section('title', 'Help Page')

@section('content')
    <div class="min-h-screen bg-blue-900 text-white">
        <!-- Hero Section -->
        <div class="bg-gradient-to-b from-blue-800 to-blue-900 py-16">
            <div class="container mx-auto px-4">
                <h1 class="text-center text-4xl font-semibold mb-2">Help Center</h1>
                <h2 class="text-center text-3xl mb-6">How can we assist you with your travel plans?</h2>
                <p class="text-center text-blue-200 mb-8">
                    Find answers to your questions or contact our support team.
                </p>
                
                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto flex gap-2">
                    <input type="text" 
                        placeholder="Search for travel topics" 
                        class="w-full px-4 py-2 rounded-lg bg-blue-800 border border-blue-700 focus:outline-none focus:border-yellow-500">
                    <button class="px-6 py-2 bg-yellow-500 text-blue-900 font-semibold rounded-lg hover:bg-yellow-400 transition">
                        Search
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-12">
            <h3 class="text-2xl font-semibold mb-8">Explore all travel topics</h3>

            <!-- Grid Categories -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Booking Tours -->
                <div class="bg-blue-800 p-6 rounded-xl">
                    <div class="mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Booking Tours</h4>
                    <ul class="space-y-3 text-blue-200">
                        <li>How to book a tour</li>
                        <li>Modifying or cancelling a booking</li>
                        <li>Group booking options</li>
                    </ul>
                </div>

                <!-- Destinations -->
                <div class="bg-blue-800 p-6 rounded-xl">
                    <div class="mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Destinations</h4>
                    <ul class="space-y-3 text-blue-200">
                        <li>Popular destinations</li>
                        <li>Travel guides and tips</li>
                        <li>Seasonal recommendations</li>
                    </ul>
                </div>

                <!-- Travel Services -->
                <div class="bg-blue-800 p-6 rounded-xl">
                    <div class="mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Travel Services</h4>
                    <ul class="space-y-3 text-blue-200">
                        <li>Transportation options</li>
                        <li>Accommodation bookings</li>
                        <li>Travel insurance</li>
                    </ul>
                </div>

                <!-- Special Offers -->
                <div class="bg-blue-800 p-6 rounded-xl">
                    <div class="mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Special Offers</h4>
                    <ul class="space-y-3 text-blue-200">
                        <li>Current promotions</li>
                        <li>Loyalty program</li>
                        <li>Group discounts</li>
                    </ul>
                </div>

                <!-- Travel Requirements -->
                <div class="bg-blue-800 p-6 rounded-xl">
                    <div class="mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Travel Requirements</h4>
                    <ul class="space-y-3 text-blue-200">
                        <li>Visa information</li>
                        <li>Health and safety guidelines</li>
                        <li>Required documents</li>
                    </ul>
                </div>

                <!-- Customer Support -->
                <div class="bg-blue-800 p-6 rounded-xl">
                    <div class="mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Customer Support</h4>
                    <ul class="space-y-3 text-blue-200">
                        <li>Contact our support team</li>
                        <li>FAQs</li>
                        <li>Emergency assistance</li>
                    </ul>
                </div>
            </div>

            <!-- Still Need Help Section -->
            <div class="mt-16 text-center">
                <h3 class="text-2xl font-semibold mb-6">Still need help?</h3>
                <button class="px-6 py-3 bg-yellow-500 text-blue-900 font-semibold rounded-lg hover:bg-yellow-400 transition">
                    Contact us now
                </button>
            </div>

            <!-- Travel Tips Section -->
            <div class="mt-16">
                <p class="text-sm text-blue-300">Travel Tips</p>
                <h3 class="text-2xl font-semibold mb-8">Essential tips for your next adventure</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Tip Card 1 -->
                    <div class="bg-blue-800 rounded-xl overflow-hidden">
                        <img src="path_to_image" alt="Packing Tips" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <p class="text-sm text-blue-300 mb-2">December 14, 2023</p>
                            <h4 class="font-semibold">10 Essential Packing Tips for Long-Term Travel</h4>
                        </div>
                    </div>

                    <!-- Tip Card 2 -->
                    <div class="bg-blue-800 rounded-xl overflow-hidden">
                        <img src="path_to_image" alt="Budget Travel" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <p class="text-sm text-blue-300 mb-2">December 10, 2023</p>
                            <h4 class="font-semibold">How to Travel on a Budget: Money-Saving Strategies</h4>
                        </div>
                    </div>

                    <!-- Tip Card 3 -->
                    <div class="bg-blue-800 rounded-xl overflow-hidden">
                        <img src="path_to_image" alt="Solo Travel" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <p class="text-sm text-blue-300 mb-2">December 5, 2023</p>
                            <h4 class="font-semibold">The Ultimate Guide to Solo Travel: Tips and Destinations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection