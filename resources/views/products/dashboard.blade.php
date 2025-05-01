<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Kilimo Smart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            min-height: 100vh;
        }
        
        .nav-item {
            transition: all 0.3s ease;
        }
        
        .nav-item:hover {
            transform: translateY(-3px);
        }
        
        .nav-item.active {
            border-bottom: 3px solid #10b981;
        }
        
        .menu-panel {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }
        
        .menu-panel.open {
            max-height: 500px;
        }
        
        .card {
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .top-nav-icon {
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .top-nav-icon:hover {
            color: #10b981;
            transform: scale(1.1);
        }
        
        .quick-menu-item {
            transition: all 0.2s ease;
        }
        
        .quick-menu-item:hover {
            background-color: rgba(16, 185, 129, 0.1);
        }
        
        .submenu-container {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            z-index: 50;
            background-color: white;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .nav-item:hover .submenu-container {
            display: block;
        }
        
        .profile-dropdown {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            transform: translateY(-10px);
        }
        
        .profile-dropdown.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .profile-trigger:hover + .profile-dropdown,
        .profile-dropdown:hover {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    </style>
</head>
<body>
  
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
             
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-10 w-10 rounded-lg" src="{{ asset('images/logo.jpg') }}" alt="Logo">
                        <span class="ml-2 text-xl font-bold text-teal-800">Kilimo Smart</span>
                    </div>
                </div>
                
              
                <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                    <div class="max-w-lg w-full lg:max-w-xs">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-teal-600 focus:border-teal-600 sm:text-sm" placeholder="Search..." type="search">
                        </div>
                    </div>
                </div>
                
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <span class="top-nav-icon">
                            <i class="fas fa-bell text-gray-600 text-xl"></i>
                            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500"></span>
                        </span>
                    </div>
                    
                    <div class="relative">
                        <span class="top-nav-icon">
                            <i class="fas fa-envelope text-gray-600 text-xl"></i>
                            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500"></span>
                        </span>
                    </div>
                    
                   
                    <div class="relative">
                        <div class="profile-trigger flex items-center cursor-pointer">
                            <img class="h-8 w-8 rounded-full" src="{{ asset('images/user.jpeg') }}" alt="User profile">
                            <span class="ml-2 text-sm font-medium text-gray-700">Mkulima</span>
                            <i class="fas fa-chevron-down ml-1 text-gray-500 text-xs"></i>
                        </div>
                        
                        <div class="profile-dropdown absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                            <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-user mr-2 text-gray-500"></i> Profile
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-cog mr-2 text-gray-500"></i> Settings
                            </a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                            </a>
                            <form id="logout-form" action="#" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="main-content" class="pt-16 min-h-screen">
        <div class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex items-center">
                        <button id="menu-toggle" class="p-2 rounded-md text-gray-700 hover:text-gray-900 focus:outline-none">
                        <i class="fas fa-user-shield text-3xl text-teal-600 mb-3"></i>


                        </button>
                        <div class="ml-4 text-gray-500 flex items-center text-sm">
                            <span>Dashboard</span>
                            <i class="fas fa-chevron-right mx-2 text-xs"></i>
                            <span class="text-teal-700 font-medium">Home</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded-lg text-sm flex items-center">
                            <i class="fas fa-plus mr-2"></i> Weka Mzigo
                        </button>
                        <div class="relative">
                            <button id="quick-actions" class="bg-gray-200 hover:bg-gray-300 py-2 px-4 rounded-lg text-sm flex items-center">
                                <span>Quick Actions</span>
                                <i class="fas fa-chevron-down ml-2"></i>
                            </button>
                            <div id="quick-actions-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                                <a href="#" class="quick-menu-item block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-tractor mr-2 text-teal-600"></i> Visit Farm
                                </a>
                                <a href="#" class="quick-menu-item block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-cloud-sun mr-2 text-teal-600"></i> Check Weather
                                </a>
                                <a href="#" class="quick-menu-item block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-shopping-cart mr-2 text-teal-600"></i> Go to Market
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg md:hidden z-10">
            <div class="flex justify-around">
                <a href="#" class="nav-item flex flex-col items-center py-3 px-2 active">
                    <i class="fas fa-tractor text-teal-600"></i>
                    <span class="text-xs mt-1 text-teal-700">Nyumba</span>
                </a>
                <a href="{{route('products.masoko')}}" class="nav-item flex flex-col items-center py-3 px-2">
                    <i class="fas fa-shopping-cart text-gray-500"></i>
                    <span class="text-xs mt-1 text-gray-700">Sokoni</span>
                </a>
                <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                    <i class="fas fa-dollar-sign text-gray-500"></i>
                    <span class="text-xs mt-1 text-gray-700">Bei</span>
                </a>
                <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                    <i class="fas fa-cloud-sun text-gray-500"></i>
                    <span class="text-xs mt-1 text-gray-700">Hali ya Hewa</span>
                </a>
                <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                    <i class="fas fa-ellipsis-h text-gray-500"></i>
                    <span class="text-xs mt-1 text-gray-700">More</span>
                </a>
            </div>
        </div>
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-16 md:mb-0">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                <div class="card bg-gradient-to-br from-teal-500 to-teal-700 text-white rounded-2xl shadow-md p-6">
                    <div class="mb-4">
                        <i class="fas fa-tractor text-4xl"></i>
                    </div>
                    <a href="{{route('products.mashamba')}}">
                    <h3 class="text-lg font-bold">Nyumba ya Mkulima</h3>
                    <p class="text-sm opacity-80 mt-1">Manage your farm</p>
                    </a>
                </div>
                
                <div class="card bg-gradient-to-br from-amber-500 to-amber-700 text-white rounded-2xl shadow-md p-6">
                    <div class="mb-4">
                        <i class="fas fa-shopping-cart text-4xl"></i>
                    </div>
                    <a href="{{route('products.masoko')}}">
                    <h3 class="text-lg font-bold">Sokoni</h3>
                    <p class="text-sm opacity-80 mt-1">Market your crops</p>
                    </a>
                </div>
                
                <div class="card bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-2xl shadow-md p-6">
                    <div class="mb-4">
                        <i class="fas fa-cloud-sun text-4xl"></i>
                        <a href="{{route('products.weather')}}">
                    </div>
                    <h3 class="text-lg font-bold">Hali ya Hewa</h3>
                    <p class="text-sm opacity-80 mt-1">Weather forecast</p>
                    </a>
                </div>
                
                <div class="card bg-gradient-to-br from-purple-500 to-purple-700 text-white rounded-2xl shadow-md p-6">
                    <div class="mb-4">
                        <i class="fas fa-users text-4xl"></i>
                    </div>
                    <a href="{{route('products.create')}}">
                    <h3 class="text-lg font-bold">Uza mazao</h3>
                    <p class="text-sm opacity-80 mt-1">sell your product</p>
                    </a>
                </div>
            </div>
        
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <a href="#" class="card bg-white rounded-xl shadow-sm hover:shadow-md p-5 flex items-center">
                    <div class="bg-teal-100 rounded-full p-3 mr-4">
                        <i class="fas fa-dollar-sign text-teal-700 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Bei Elekezi</h3>
                        <p class="text-sm text-gray-500">Check current market prices</p>
                    </div>
                    <i class="fas fa-chevron-right text-gray-400 ml-auto"></i>
                </a>
                
                <a href="#" class="card bg-white rounded-xl shadow-sm hover:shadow-md p-5 flex items-center">
                    <div class="bg-blue-100 rounded-full p-3 mr-4">
                        <i class="fas fa-envelope text-blue-700 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Mawasiliano</h3>
                        <p class="text-sm text-gray-500">Communications and messages</p>
                    </div>
                    <i class="fas fa-chevron-right text-gray-400 ml-auto"></i>
                </a>
                
                <a href="#" class="card bg-white rounded-xl shadow-sm hover:shadow-md p-5 flex items-center">
                    <div class="bg-amber-100 rounded-full p-3 mr-4">
                        <i class="fas fa-chart-bar text-amber-700 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Takwimu na ripoti</h3>
                        <p class="text-sm text-gray-500">Statistics and reports</p>
                    </div>
                    <i class="fas fa-chevron-right text-gray-400 ml-auto"></i>
                </a>
                
                <a href="#" class="card bg-white rounded-xl shadow-sm hover:shadow-md p-5 flex items-center">
                    <div class="bg-green-100 rounded-full p-3 mr-4">
                        <i class="fas fa-chalkboard-teacher text-green-700 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Elimu na ushauri</h3>
                        <p class="text-sm text-gray-500">Education and advice</p>
                    </div>
                    <i class="fas fa-chevron-right text-gray-400 ml-auto"></i>
                </a>
                
                <a href="#" class="card bg-white rounded-xl shadow-sm hover:shadow-md p-5 flex items-center">
                    <div class="bg-red-100 rounded-full p-3 mr-4">
                        <i class="fas fa-shopping-cart text-red-700 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Weka Mzigo</h3>
                        <p class="text-sm text-gray-500">Add products to the market</p>
                    </div>
                    <i class="fas fa-chevron-right text-gray-400 ml-auto"></i>
                </a>
                
                <a href="#" class="card bg-white rounded-xl shadow-sm hover:shadow-md p-5 flex items-center">
                    <div class="bg-indigo-100 rounded-full p-3 mr-4">
                        <i class="fas fa-users text-indigo-700 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Minada ya mazao</h3>
                        <p class="text-sm text-gray-500">Crop auctions</p>
                    </div>
                    <i class="fas fa-chevron-right text-gray-400 ml-auto"></i>
                </a>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Dashboard Overview</h2>
                <p class="text-gray-600">Welcome to your Kilimo Smart dashboard. Here you can manage your farming activities, check market prices, and more.</p>
            </div>
        </div>
    </div>
    
    <script>
        
        const menuToggle = document.getElementById('menu-toggle');
        const fullscreenMenu = document.getElementById('fullscreen-menu');
        const closeMenu = document.getElementById('close-menu');
        
        menuToggle.addEventListener('click', () => {
            fullscreenMenu.classList.toggle('hidden');
        });
        
        closeMenu.addEventListener('click', () => {
            fullscreenMenu.classList.add('hidden');
        });
    
        const quickActions = document.getElementById('quick-actions');
        const quickActionsDropdown = document.getElementById('quick-actions-dropdown');
        
        quickActions.addEventListener('click', () => {
            quickActionsDropdown.classList.toggle('hidden');
        });
    
        document.addEventListener('click', (event) => {
            if (!quickActions.contains(event.target)) {
                quickActionsDropdown.classList.add('hidden');
            }
        });
        
        const profileTrigger = document.querySelector('.profile-trigger');
        const profileDropdown = document.querySelector('.profile-dropdown');
        
        profileTrigger.addEventListener('click', () => {
            profileDropdown.classList.toggle('show');
        });
        
       
        document.addEventListener('click', (event) => {
            if (!profileTrigger.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.remove('show');
            }
        });
    </script>
</body>
</html>