<!-- resources/views/partials/header.blade.php -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="{{ url('/') }}" class="flex items-center py-4 px-2">
                        <span class="font-semibold text-gray-500 text-lg">Traveling</span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('holiday-packages') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Holiday Packages</a>
                    <a href="{{ route('top-deals') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Top Deals</a>
                    <a href="{{ route('help') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Help</a>
                    <a href="{{ route('wishlist') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Wishlist</a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3 ">
                <a href="{{ route('register') }}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-blue-500 hover:text-white transition duration-300">Register</a>
                <a href="{{ route('login') }}" class="py-2 px-2 font-medium text-white bg-blue-500 rounded hover:bg-blue-400 transition duration-300">Login</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-500 hover:text-blue-500"
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li><a href="{{ route('holiday-packages') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Holiday Packages</a></li>
            <li><a href="{{ route('top-deals') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Top Deals</a></li>
            <li><a href="{{ route('help') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Help</a></li>
            <li><a href="{{ route('wishlist') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Wishlist</a></li>
            <li><a href="{{ route('register') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Register</a></li>
            <li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Login</a></li>
        </ul>
    </div>
</nav>

<script>
    // Grab HTML Elements
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // Add Event Listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
