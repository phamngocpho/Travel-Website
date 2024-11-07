<!-- resources/views/partials/header.blade.php -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="{{ url('/') }}" class="flex items-center py-4 px-2">
                        <span class="font-bold text-2xl text-blue-600 font-kalam">Traveling</span>
                    </a>
                </div>

                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-3">
                    <a href="{{ route('holiday-packages') }}" 
                       class="py-4 px-3 text-gray-700 font-roboto hover:text-blue-500 
                              transition duration-300 border-b-2 border-transparent 
                              hover:border-blue-500">
                        Holiday Packages
                    </a>
                    <a href="{{ route('top-deals') }}" 
                       class="py-4 px-3 text-gray-700 font-roboto hover:text-blue-500 
                              transition duration-300 border-b-2 border-transparent 
                              hover:border-blue-500">
                        Top Deals
                    </a>
                    <a href="{{ route('help') }}" 
                       class="py-4 px-3 text-gray-700 font-roboto hover:text-blue-500 
                              transition duration-300 border-b-2 border-transparent 
                              hover:border-blue-500">
                        Help
                    </a>
                    <a href="{{ route('wishlist') }}" 
                       class="py-4 px-3 text-gray-700 font-roboto hover:text-blue-500 
                              transition duration-300 border-b-2 border-transparent 
                              hover:border-blue-500">
                        <i class="far fa-heart mr-1"></i>Wishlist
                    </a>
                </div>
            </div>

            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3">
                <a href="{{ route('register') }}" 
                   class="py-2 px-4 font-roboto text-gray-700 hover:text-blue-500 
                          transition duration-300">
                    Register
                </a>
                <a href="{{ route('login') }}" 
                   class="py-2 px-4 font-roboto text-white bg-blue-600 rounded-lg
                          hover:bg-blue-700 transition duration-300 shadow-md 
                          hover:shadow-lg">
                    Login
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button" aria-label="Menu">
                    <svg class="w-6 h-6 text-gray-500 hover:text-blue-500"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden mobile-menu md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-50">
            <a href="{{ route('holiday-packages') }}"
               class="block px-3 py-2 rounded-md text-base font-roboto text-gray-700
                      hover:text-blue-500 hover:bg-gray-100 transition duration-300">
                Holiday Packages
            </a>
            <a href="{{ route('top-deals') }}"
               class="block px-3 py-2 rounded-md text-base font-roboto text-gray-700
                      hover:text-blue-500 hover:bg-gray-100 transition duration-300">
                Top Deals
            </a>
            <a href="{{ route('help') }}"
               class="block px-3 py-2 rounded-md text-base font-roboto text-gray-700
                      hover:text-blue-500 hover:bg-gray-100 transition duration-300">
                Help
            </a>
            <a href="{{ route('wishlist') }}"
               class="block px-3 py-2 rounded-md text-base font-roboto text-gray-700
                      hover:text-blue-500 hover:bg-gray-100 transition duration-300">
                <i class="far fa-heart mr-1"></i>Wishlist
            </a>
            <div class="border-t border-gray-200 my-2"></div>
            <a href="{{ route('register') }}"
               class="block px-3 py-2 rounded-md text-base font-roboto text-gray-700
                      hover:text-blue-500 hover:bg-gray-100 transition duration-300">
                Register
            </a>
            <a href="{{ route('login') }}"
               class="block px-3 py-2 rounded-md text-base font-roboto text-white
                      bg-blue-600 hover:bg-blue-700 transition duration-300">
                Login
            </a>
        </div>
    </div>
</nav>

<!-- Script for Mobile Menu Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile Menu Toggle
        const btn = document.querySelector('button.mobile-menu-button');
        const menu = document.querySelector('.mobile-menu');
        
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('scale-y-0');
            menu.classList.toggle('scale-y-100');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInside = menu.contains(event.target) || btn.contains(event.target);
            
            if (!isClickInside && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
                menu.classList.remove('scale-y-100');
                menu.classList.add('scale-y-0');
            }
        });

        // Add active state to current page link
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('nav a');
        
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('text-blue-500');
                link.classList.add('border-blue-500');
            }
        });
    });
</script>
