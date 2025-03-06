<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dani Motor - Dashboard</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.0/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter var', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#FFF7E6',
                            100: '#FFEFC8',
                            200: '#FFE08A',
                            300: '#FFD24D',
                            400: '#FFC929',
                            500: '#FFB800',
                            600: '#CC9300',
                            700: '#996E00',
                            800: '#664900',
                            900: '#332500',
                        },
                    }
                }
            }
        }
    </script>
</head>
<body class="h-full" x-data="{
    sidebarOpen: true,
    mobileSidebarOpen: false,
    activeTab: 'dashboard',
    profileDropdownOpen: false,
    notificationsOpen: false
}">

    <div class="flex h-full">
        <!-- Sidebar -->
        <aside class="fixed inset-y-0 left-0 z-30 w-64 bg-gray-900 shadow-lg transform transition-transform duration-300 ease-in-out lg:translate-x-0 h-full"
             :class="{'translate-x-0': mobileSidebarOpen, '-translate-x-full': !mobileSidebarOpen, 'lg:relative': true}">
            <!-- Sidebar header -->
            <div class="flex items-center justify-center h-16 px-6 border-b border-gray-800">
                <div class="flex items-center space-x-3">
                    <div class="bg-primary-500 text-white font-bold text-xl p-2 rounded-lg">DM</div>
                    <h1 class="text-xl font-bold text-white tracking-wider">Dani Motor</h1>
                </div>
            </div>

            <!-- Sidebar content -->
            <nav class="mt-6 px-3 space-y-1">
                <a @click.prevent="activeTab = 'dashboard'" href="#" class="group flex items-center px-4 py-3 text-base font-medium rounded-md transition-all duration-200"
                    :class="activeTab === 'dashboard' ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-5 w-5" :class="activeTab === 'dashboard' ? 'text-primary-400' : 'text-gray-400 group-hover:text-white'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    Dashboard
                </a>

                <a href="#" class="group flex items-center px-4 py-3 text-base font-medium rounded-md transition-all duration-200 text-gray-300 hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Transaksi
                </a>

                <a href="#" class="group flex items-center px-4 py-3 text-base font-medium rounded-md transition-all duration-200 text-gray-300 hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Laporan Keuangan
                </a>

                <a href="#" class="group flex items-center px-4 py-3 text-base font-medium rounded-md transition-all duration-200 text-gray-300 hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    Inventaris
                </a>

                <a href="#" class="group flex items-center px-4 py-3 text-base font-medium rounded-md transition-all duration-200 text-gray-300 hover:bg-gray-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Pelanggan
                </a>
            </nav>

            <!-- Sidebar footer -->
            <div class="absolute bottom-0 w-full p-4 border-t border-gray-800">
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-md hover:bg-gray-800 hover:text-white transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main content area -->
        <div class="flex-1 flex flex-col overflow-hidden w-full">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-10 w-full">
                <div class="mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <!-- Left section with page title -->
                        <div class="flex items-center ml-0 lg:ml-0">
                            <h1 class="text-xl md:text-2xl font-semibold text-gray-800 pl-12 lg:pl-0" x-text="
                                activeTab === 'dashboard' ? 'Dashboard' :
                                activeTab === 'transactions' ? 'Transaksi' :
                                activeTab === 'finance' ? 'Laporan Keuangan' :
                                activeTab === 'inventory' ? 'Inventaris' :
                                activeTab === 'customers' ? 'Pelanggan' : 'Dashboard'
                            "></h1>
                        </div>

                        <!-- Right section with search and profile -->
                        <div class="flex items-center space-x-2 md:space-x-4">
                            <!-- Search box - hidden on small screens -->
                            <div class="relative hidden md:block">
                                <input type="text" placeholder="Cari..." class="w-40 lg:w-64 pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:border-transparent">
                                <div class="absolute left-3 top-2.5 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Search icon for mobile -->
                            <button class="md:hidden p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button @click="profileDropdownOpen = !profileDropdownOpen" class="flex items-center max-w-xs text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500" id="user-menu-button">
                                        <div class="h-8 w-8 rounded-full bg-primary-500 flex items-center justify-center text-white font-medium">AD</div>
                                        <span class="ml-2 text-gray-700 hidden md:inline">Admin Dani</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div x-show="profileDropdownOpen" @click.away="profileDropdownOpen = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 z-10" role="menu">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profil</a>
                                    <div class="border-t border-gray-100"></div>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main content -->
            <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-gray-50">
                <div x-show="activeTab === 'dashboard'" class="space-y-6">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Dashboard</h2>
                        <p class="text-gray-600">Selamat datang di Dashboard Dani Motor.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
