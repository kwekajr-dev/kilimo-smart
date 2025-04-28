<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilimo Smart | Hali ya Hewa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
        
        .weather-data-card {
            transition: all 0.2s ease;
        }
        
        .weather-data-card:hover {
            transform: scale(1.03);
        }
        
        .weather-icon {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    <!-- Top Navigation Bar -->
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-10 w-10 rounded-lg" src="{{ asset('images/logo.jpg') }}" alt="Logo">
                        <span class="ml-2 text-xl font-bold text-teal-800">Kilimo Smart</span>
                    </div>
                </div>
                
                <!-- Search Bar -->
                <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                    <div class="max-w-lg w-full lg:max-w-xs">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-teal-600 focus:border-teal-600 sm:text-sm" placeholder="Tafuta..." type="search">
                        </div>
                    </div>
                </div>
                
                <!-- Right Nav Icons -->
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
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-user mr-2 text-gray-500"></i> Profile
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-cog mr-2 text-gray-500"></i> Settings
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    
    <div class="bg-white shadow-sm border-b border-gray-200 fixed top-16 w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <button id="menu-toggle" class="p-2 rounded-md text-gray-700 hover:text-gray-900 focus:outline-none">
                        <i class="fas fa-bars text-xl text-teal-600"></i>
                    </button>
                    <div class="ml-4 text-gray-500 flex items-center text-sm">
                        <span>Dashboard</span>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <span class="text-teal-700 font-medium">Hali ya Hewa</span>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="relative">
                        <button id="quick-actions" class="bg-gray-200 hover:bg-gray-300 py-2 px-4 rounded-lg text-sm flex items-center">
                            <span>Quick Actions</span>
                            <i class="fas fa-chevron-down ml-2"></i>
                        </button>
                        <div id="quick-actions-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-tractor mr-2 text-teal-600"></i> Visit Farm
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-cloud-sun mr-2 text-teal-600"></i> Check Weather
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-shopping-cart mr-2 text-teal-600"></i> My Orders
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg md:hidden z-10">
        <div class="flex justify-around">
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-tractor text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Nyumba</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-shopping-cart text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Sokoni</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2 active">
                <i class="fas fa-cloud-sun text-teal-600"></i>
                <span class="text-xs mt-1 text-teal-700">Hali ya Hewa</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-dollar-sign text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Bei</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-ellipsis-h text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">More</span>
            </a>
        </div>
    </div>


    <main class="pt-32 pb-16 md:pb-8 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
           
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Hali ya Hewa</h1>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-500">Mwisho Kusasishwa: </span>
                    <span class="text-sm font-medium">{{ date('H:i, d M Y') }}</span>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
             
                <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-200 md:col-span-1">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 rounded-full bg-teal-50 flex items-center justify-center">
                            <i class="fas fa-cloud-sun-rain text-teal-500 text-2xl"></i>
                        </div>
                    </div>
                    
                    <h2 class="text-lg font-semibold text-center text-gray-800 mb-4">Angalia Hali ya Hewa</h2>
                    <p class="text-sm text-gray-600 text-center mb-6">Chagua mkoa wako kupata taarifa za hali ya hewa</p>
                    
                    <form action="{{ route('products.getWeather') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="region" class="block text-sm font-medium text-gray-700 mb-1">Mkoa</label>
                            <select name="region" id="region" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                                <option value="">-- Chagua Mkoa --</option>
                                @foreach($regions as $region)
                                    <option value="{{ $region }}" {{ isset($selectedRegion) && $selectedRegion == $region ? 'selected' : '' }}>{{ $region }}</option>
                                @endforeach
                            </select>
                            @error('region')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit" class="w-full bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded-lg font-medium transition duration-200 flex items-center justify-center gap-2">
                            <i class="fas fa-search text-white"></i>
                            <span>Tafuta</span>
                        </button>
                    </form>
                </div>
                
                
                <div class="card bg-white rounded-xl shadow-sm border border-gray-200 md:col-span-2">
                    @if(isset($weather))
                    
                    <div class="p-6">
                        <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                            <h2 class="text-xl font-bold text-gray-800">{{ $weather['name'] }}</h2>
                            <div class="flex items-center gap-2">
                                <img src="https://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}@2x.png" alt="{{ $weather['weather'][0]['description'] }}" class="w-14 h-14 weather-icon">
                                <span class="py-1 px-3 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">{{ ucfirst($weather['weather'][0]['description']) }}</span>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 mt-6">
                            <div class="weather-data-card bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center gap-2 mb-1">
                                    <i class="fas fa-temperature-high text-red-500"></i>
                                    <span class="text-sm text-gray-600">Joto</span>
                                </div>
                                <p class="text-2xl font-bold text-gray-800">{{ round($weather['main']['temp']) }}°C</p>
                                <p class="text-xs text-gray-500 mt-1">Wastani wa joto: {{ round($weather['main']['feels_like']) }}°C</p>
                            </div>
                            
                            <div class="weather-data-card bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center gap-2 mb-1">
                                    <i class="fas fa-tint text-blue-500"></i>
                                    <span class="text-sm text-gray-600">Unyevu</span>
                                </div>
                                <p class="text-2xl font-bold text-gray-800">{{ $weather['main']['humidity'] }}%</p>
                                <p class="text-xs text-gray-500 mt-1">Unyevu wa hewa</p>
                            </div>
                            
                            <div class="weather-data-card bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center gap-2 mb-1">
                                    <i class="fas fa-wind text-blue-400"></i>
                                    <span class="text-sm text-gray-600">Upepo</span>
                                </div>
                                <p class="text-2xl font-bold text-gray-800">{{ $weather['wind']['speed'] }} m/s</p>
                                <p class="text-xs text-gray-500 mt-1">Direction: {{ $weather['wind']['deg'] }}°</p>
                            </div>
                            
                            <div class="weather-data-card bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center gap-2 mb-1">
                                    <i class="fas fa-compress-alt text-gray-600"></i>
                                    <span class="text-sm text-gray-600">Pressure</span>
                                </div>
                                <p class="text-2xl font-bold text-gray-800">{{ $weather['main']['pressure'] }} hPa</p>
                                <p class="text-xs text-gray-500 mt-1">Pressure ya hewa</p>
                            </div>
                        </div>
                        
                        <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                            <h3 class="text-sm font-medium text-blue-700 mb-2">Ushauri kwa Wakulima:</h3>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-check-circle text-green-500 text-xs"></i>
                                    Leo ni siku nzuri kwa kupanda mazao mapya
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-info-circle text-blue-500 text-xs"></i>
                                    Hakikisha umepata maji ya kutosha kwa mimea yako
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-exclamation-triangle text-amber-500 text-xs"></i>
                                    Kuwa tayari kwa mabadiliko ya hali ya hewa
                                </li>
                            </ul>
                        </div>
                        
                        <div class="mt-4 text-center text-xs text-gray-500">
                            Data zimechukuliwa: {{ date('H:i, d M Y', $weather['dt']) }}
                        </div>
                    </div>
                    @else
                   
                    <div class="p-10 flex flex-col items-center justify-center h-full">
                        <div class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center mb-4">
                            <i class="fas fa-cloud text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-700 mb-2">Hakuna data za hali ya hewa</h3>
                        <p class="text-sm text-gray-500 text-center mb-6">Tafadhali chagua mkoa kupata data za hali ya hewa</p>
                    </div>
                    @endif
                </div>
            </div>
            
            
            <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-200 mt-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Mwelekeo wa Hali ya Hewa Wiki Hii</h2>
                <div class="flex overflow-x-auto space-x-4 pb-4">
                    @for ($i = 0; $i < 5; $i++)
                    <div class="flex-shrink-0 w-32 p-3 bg-gray-50 rounded-lg text-center">
                        <p class="text-sm font-medium text-gray-700">{{ date('D', strtotime("+$i day")) }}</p>
                        <div class="my-2 flex justify-center">
                            <i class="fas {{ $i % 3 == 0 ? 'fa-sun text-yellow-500' : ($i % 2 == 0 ? 'fa-cloud-sun text-blue-400' : 'fa-cloud-rain text-blue-500') }} text-2xl"></i>
                        </div>
                        <p class="text-lg font-bold text-gray-800">{{ rand(20, 30) }}°C</p>
                        <p class="text-xs text-gray-500">{{ rand(40, 85) }}% unyevu</p>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </main>

    
    <footer class="bg-gray-800 text-white mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-lg font-semibold flex items-center">
                        <img class="h-8 w-8 rounded-lg mr-2" src="{{ asset('images/logo.jpg') }}" alt="Logo">
                        Kilimo Smart
                    </h3>
                    <p class="text-sm text-gray-400">Tunaunganisha wakulima na taarifa muhimu.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <div class="mt-4 md:mt-0 text-sm text-gray-400">
                    &copy; {{ date('Y') }} Kilimo Smart. Haki zote zimehifadhiwa.
                </div>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Profile dropdown toggle
        const profileTrigger = document.querySelector('.profile-trigger');
        const profileDropdown = document.querySelector('.profile-dropdown');
        
        if (profileTrigger && profileDropdown) {
            profileTrigger.addEventListener('click', function() {
                profileDropdown.classList.toggle('show');
            });
            
            // Close profile dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!profileTrigger.contains(event.target) && !profileDropdown.contains(event.target)) {
                    profileDropdown.classList.remove('show');
                }
            });
        }
        
    </script>
</html>