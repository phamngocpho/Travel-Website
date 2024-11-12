<nav class="bg-white shadow-lg fixed top-0 left-0 right-0 z-50 transition-transform duration-300" id="navbar">
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
                      @php
                          $navItems = [
                              'explore' => 'Explore',
                              'top-deals' => 'Top Deals',
                              'help' => 'Help',
                              'blog' => 'Blog',
                              'wishlist' => 'Wishlist'
                          ];
                      @endphp

                      @foreach ($navItems as $route => $label)
                          <a href="{{ route($route) }}" 
                             class="py-4 px-3 text-gray-700 font-roboto hover:text-blue-500 
                                    transition duration-300 border-b-2 
                                    {{ request()->routeIs($route) ? 'border-blue-500 text-blue-500' : 'border-transparent' }} 
                                    hover:border-blue-500">
                              @if ($label === 'Wishlist')
                                  <i class="far fa-heart mr-1"></i>
                              @endif
                              {{ $label }}
                          </a>
                      @endforeach
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
      <div class="hidden mobile-menu md:hidden transform scale-y-0 transition-transform origin-top">
          <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-50">
              @foreach ($navItems as $route => $label)
                  <a href="{{ route($route) }}"
                     class="block px-3 py-2 rounded-md text-base font-roboto 
                            {{ request()->routeIs($route) ? 'text-blue-500 bg-gray-100' : 'text-gray-700' }}
                            hover:text-blue-500 hover:bg-gray-100 transition duration-300">
                      @if ($label === 'Wishlist')
                          <i class="far fa-heart mr-1"></i>
                      @endif
                      {{ $label }}
                  </a>
              @endforeach
              <div class="border-t border-gray-200 my-2"></div>
              <a href="{{ route('register') }}"
                 class="block px-3 py-2 rounded-md text-base font-roboto
                        {{ request()->routeIs('register') ? 'text-blue-500 bg-gray-100' : 'text-gray-700' }}
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

  <!-- Spacer để tránh content bị che bởi fixed navbar -->
  <div class="h-16"></div>

  <!-- Script for Mobile Menu Toggle and Navbar Scroll -->
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Mobile Menu Toggle
          const btn = document.querySelector('button.mobile-menu-button');
          const menu = document.querySelector('.mobile-menu');
          
          btn.addEventListener('click', () => {
              menu.classList.toggle('hidden');
              if (menu.classList.contains('hidden')) {
                  menu.classList.remove('scale-y-100');
                  menu.classList.add('scale-y-0');
              } else {
                  setTimeout(() => {
                      menu.classList.remove('scale-y-0');
                      menu.classList.add('scale-y-100');
                  }, 10);
              }
          });

          // Close mobile menu when clicking outside
          document.addEventListener('click', function(event) {
              const isClickInside = menu.contains(event.target) || btn.contains(event.target);
              
              if (!isClickInside && !menu.classList.contains('hidden')) {
                  menu.classList.remove('scale-y-100');
                  menu.classList.add('scale-y-0');
                  setTimeout(() => {
                      menu.classList.add('hidden');
                  }, 300);
              }
          });

          // Navbar scroll behavior
          let lastScrollTop = 0;
          const navbar = document.getElementById('navbar');
          const scrollThreshold = 100;
          let scrollTimer = null;

          window.addEventListener('scroll', function() {
              if (scrollTimer !== null) {
                  clearTimeout(scrollTimer);
              }

              scrollTimer = setTimeout(function() {
                  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                  if (Math.abs(lastScrollTop - scrollTop) <= 10) return;

                  if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
                      navbar.style.transform = 'translateY(-100%)';
                  } else {
                      navbar.style.transform = 'translateY(0)';
                  }

                  lastScrollTop = scrollTop;
              }, 100);
          });
      });
  </script>

  <style>
      .mobile-menu {
          transition: transform 0.3s ease-in-out;
      }

      .scale-y-0 {
          transform: scaleY(0);
      }

      .scale-y-100 {
          transform: scaleY(1);
      }
  </style>