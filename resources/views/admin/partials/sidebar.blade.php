<div class="bg-gray-900" x-data="{ collapsed: true, openMenu: null }">
    <div class="flex ">
        <!-- Sidebar -->
        <div class="fixed bg-gray-900 text-gray-300 border-r border-gray-700 transition-all duration-300 ease-in-out overflow-visible" 
             :class="{'w-64': !collapsed, 'w-16': collapsed}">
            <!-- Toggle Button -->
            <button @click="collapsed = !collapsed" 
                    class="absolute -right-3 top-4 bg-gray-800 text-gray-300 p-1 rounded-full border border-gray-600 hover:bg-gray-700 z-50">
                <svg x-show="!collapsed" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
                </svg>
                <svg x-show="collapsed" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Logo -->
            <div class="p-4 flex items-center h-16 border-b border-gray-700">
                <!-- Add your logo here -->
                <span class="text-xl font-bold" x-show="!collapsed">Your Logo</span>
                <span class="text-xl font-bold" x-show="collapsed">L</span>
            </div>

            <!-- Main Menu -->
            <div class="overflow-y-auto h-[calc(100vh-64px)] transition-all duration-300 scrollbar-hide">
                <nav class="p-2 space-y-1">
                    <!-- Dashboard -->
                    <div class="relative group">
                        <a href="" 
                           class="menu-item flex text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg p-2 transition-all duration-200"
                           :class="{'': collapsed}"
                           @mouseenter="$refs.dashboardTooltip.classList.remove('hidden')"
                           @mouseleave="$refs.dashboardTooltip.classList.add('hidden')">
                            <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="ml-3 whitespace-nowrap" x-show="!collapsed">Dashboard</span>
                        </a>
                        <!-- Tooltip for collapsed state -->
                        <div x-ref="dashboardTooltip"
                             class="hidden absolute left-full top-0 ml-2 bg-gray-800 text-white text-sm py-1 px-2 rounded shadow-lg whitespace-nowrap z-50"
                             x-show="collapsed">
                            Dashboard
                        </div>
                    </div>

                    <!-- Tour -->
                    <div class="relative group">
                        <a href="" 
                            data-route="{{ route('tours.create')}}"
                            class="menu-item flex text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg p-2 transition-all duration-200"
                            onclick="loadContent(this); return false;"
                            @mouseenter="$refs.tourTooltip.classList.remove('hidden')"
                            @mouseleave="$refs.tourTooltip.classList.add('hidden')">
                            <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 10V8a2 2 0 00-2-2H6a2 2 0 00-2 2v2m16 0v8a2 2 0 01-2 2H6a2 2 0 01-2-2v-8m16 0h-2m-14 0H4"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v6m0 0l-3-3m3 3l3-3"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14h.01M12 14h.01M16 14h.01"/>
                            </svg>

                            <span class="ml-3 whitespace-nowrap" x-show="!collapsed">Tour</span>
                        </a>
                        <!-- Tooltip for collapsed state -->
                        <div x-ref="dashboardTooltip"
                             class="hidden absolute left-full top-0 ml-2 bg-gray-800 text-white text-sm py-1 px-2 rounded shadow-lg whitespace-nowrap z-50"
                             x-show="collapsed">
                            Tour
                        </div>
                    </div>
                    <div class="relative group">
                        <a href="" 
                            data-route="{{ route('userManagement')}}"
                            class="menu-item flex text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg p-2 transition-all duration-200"
                            onclick="loadContent(this); return false;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="4"/>
                                <path d="M12 14a6 6 0 0 0-6 6v1h12v-1a6 6 0 0 0-6-6z"/>
                                <circle cx="19" cy="19" r="2"/>
                                <path d="M19 15.5V17"/>
                                <path d="M19 21v1.5"/>
                                <path d="M22.5 19H21"/>
                                <path d="M17 19h-1.5"/>
                            </svg>

                            <span class="ml-3 whitespace-nowrap" x-show="!collapsed">Tour</span>
                        </a>
                        <!-- Tooltip for collapsed state -->
                        <div x-ref="dashboardTooltip"
                             class="hidden absolute left-full top-0 ml-2 bg-gray-800 text-white text-sm py-1 px-2 rounded shadow-lg whitespace-nowrap z-50"
                             x-show="collapsed">
                            Tour
                        </div>
                    </div>

                    <!-- Security Menu -->
                    <div class="relative group" 
                        x-data="{ open: false }" 
                        @mouseenter="open = true; openMenu = 'security'" 
                        @mouseleave="setTimeout(() => { if (openMenu === 'security') { open = false; openMenu = null; } }, 300)">
                        <a href=""
                            data-route="{{ route('security') }}"
                            class="menu-item flex items-center justify-between text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg p-2 transition-all duration-200"
                            onclick="loadContent(this); return false;">
                            <div class="flex items-center" :class="{'justify-center': collapsed}">
                                <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                <span class="ml-3 whitespace-nowrap" x-show="!collapsed">Security</span>
                            </div>
                            <svg class="w-4 h-4 ml-2" x-show="!collapsed" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>

                        <!-- Security Submenu - Shows on right when collapsed -->
                        <div x-show="open && collapsed" 
                             class="absolute left-full top-0 ml-2 bg-gray-800 rounded-lg shadow-lg z-50 py-2 min-w-[200px]"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 transform -translate-y-2"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             @mouseenter="open = true; openMenu = 'security'"
                             @mouseleave="setTimeout(() => { if (openMenu === 'security') { open = false; openMenu = null; } }, 300)">
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Access Control</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Security Logs</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Authentication</a>
                        </div>

                        <!-- Security Submenu - Shows below when expanded -->
                        <div x-show="open && !collapsed" 
                             class="relative mt-2 ml-8 bg-gray-800 rounded-lg shadow-lg z-50 py-2"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 transform -translate-y-2"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             @mouseenter="open = true; openMenu = 'security'"
                             @mouseleave="setTimeout(() => { if (openMenu === 'security') { open = false; openMenu = null; } }, 300)">
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Access Control</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Security Logs</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Authentication</a>
                        </div>
                    </div>

                    <!-- Settings Menu -->
                    <div class="relative group" 
                         x-data="{ open: false }" 
                         @mouseenter="open = true; openMenu = 'settings'" 
                         @mouseleave="setTimeout(() => { if (openMenu === 'settings') { open = false; openMenu = null; } }, 300)">
                        <a href="" 
                           class="menu-item flex items-center justify-between text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg p-2 transition-all duration-200">
                            <div class="flex items-center" :class="{'justify-center': collapsed}">
                                <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                                </svg>
                                <span class="ml-3 whitespace-nowrap" x-show="!collapsed">Settings</span>
                            </div>
                            <svg class="w-4 h-4 ml-2" x-show="!collapsed" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>

                        <!-- Settings Submenu - Shows on right when collapsed -->
                        <div x-show="open && collapsed" 
                             class="absolute left-full top-0 ml-2 bg-gray-800 rounded-lg shadow-lg z-50 py-2 min-w-[200px]"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 transform -translate-y-2"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             @mouseenter="open = true; openMenu = 'settings'"
                             @mouseleave="setTimeout(() => { if (openMenu === 'settings') { open = false; openMenu = null; } }, 300)">
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Profile Settings</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Account Settings</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Privacy Settings</a>
                        </div>

                        <!-- Settings Submenu - Shows below when expanded -->
                        <div x-show="open && !collapsed" 
                             class="relative mt-2 ml-8 bg-gray-800 rounded-lg shadow-lg z-50 py-2"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 transform -translate-y-2"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             @mouseenter="open = true; openMenu = 'settings'"
                             @mouseleave="setTimeout(() => { if (openMenu === 'settings') { open = false; openMenu = null; } }, 300)">
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Profile Settings</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Account Settings</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Privacy Settings</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] { display: none !important; }
</style>

<script>
function loadContent(element) {
    const route = element.getAttribute('data-route');
    
    // Hiển thị loading indicator nếu cần
    document.getElementById('content-container').innerHTML = '<div class="flex justify-center items-center h-screen"><div class="animate-spin rounded-full h-32 w-32 border-b-2 border-gray-900"></div></div>';

    // Sử dụng fetch để lấy nội dung
    fetch(route, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.text())
    .then(html => {
        // Cập nhật URL mà không reload trang
        window.history.pushState({}, '', route);
        
        // Parse HTML response để lấy phần content
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const content = doc.querySelector('#content-container') || doc.querySelector('.container');
        
        // Cập nhật nội dung
        document.getElementById('content-container').innerHTML = content.innerHTML;
        
        // Chạy lại các script trong content mới nếu cần
        const scripts = content.getElementsByTagName('script');
        for(let script of scripts) {
            eval(script.innerHTML);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('content-container').innerHTML = '<div class="text-red-500">Error loading content</div>';
    });
}

// Xử lý nút back/forward của trình duyệt
window.addEventListener('popstate', function() {
    loadContent({ getAttribute: () => window.location.href });
});
</script>

<!-- Add Alpine.js -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
