<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin-sidebar.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="w-64 bg-black text-white sidebar-container transition-all duration-300">
            <!-- Profile Section -->
            <div class="p-4 border-b border-gray-800">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-full overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Samantha&background=random" 
                             alt="Profile" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-medium text-sm">Administrator</h3>
                        <p class="text-xs text-gray-400">admin@email.com</p>
                    </div>
                </div>
            </div>

            <!-- Main Menu -->
            <div class="px-4 py-2">
                <p class="text-xs text-gray-500 uppercase tracking-wider mb-4">MAIN MENU</p>
                
                <!-- Menu Items -->
                <nav class="space-y-1">
                    <!-- Dashboard - Active State -->
                    <a href="#" class="menu-item active flex items-center space-x-3 text-blue-500 bg-blue-500/10 px-3 py-2 rounded-lg">
                        <i data-feather="home" class="w-5 h-5"></i>
                        <span>Dashboard</span>
                    </a>

                    <!-- Orders -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="shopping-bag" class="w-5 h-5"></i>
                        <span>Orders</span>
                    </a>

                    <!-- Rides -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="navigation" class="w-5 h-5"></i>
                        <span>Rides</span>
                    </a>

                    <!-- Clients -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="users" class="w-5 h-5"></i>
                        <span>Clients</span>
                    </a>

                    <!-- Drivers -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="user" class="w-5 h-5"></i>
                        <span>Drivers</span>
                    </a>

                    <!-- Shift -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="clock" class="w-5 h-5"></i>
                        <span>Shift</span>
                    </a>

                    <!-- Live map -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="map" class="w-5 h-5"></i>
                        <span>Live map</span>
                    </a>

                    <!-- Car classes -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="truck" class="w-5 h-5"></i>
                        <span>Car classes</span>
                    </a>

                    <!-- Branches -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="git-branch" class="w-5 h-5"></i>
                        <span>Branches</span>
                    </a>

                    <!-- Security -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="shield" class="w-5 h-5"></i>
                        <span>Security</span>
                    </a>

                    <!-- Settings -->
                    <a href="#" class="menu-item flex items-center space-x-3 text-gray-400 hover:text-white px-3 py-2 rounded-lg transition-all duration-200">
                        <i data-feather="settings" class="w-5 h-5"></i>
                        <span>Settings</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-8">
            <!-- Your main content here -->
        </div>
    </div>

    <script>
        // Initialize Feather Icons
        feather.replace();

        // Menu Item Click Handler
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function(e) {
                // Remove active class from all items
                document.querySelectorAll('.menu-item').forEach(i => {
                    i.classList.remove('active');
                    i.classList.remove('text-blue-500');
                    i.classList.remove('bg-blue-500/10');
                });

                // Add active class to clicked item
                this.classList.add('active');
                this.classList.add('text-blue-500');
                this.classList.add('bg-blue-500/10');
            });
        });
    </script>
</body>
</html>