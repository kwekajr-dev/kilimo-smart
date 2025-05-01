<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Kilimo Smart | Wasiliana Nasi</title>
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
                        <img class="h-10 w-10 rounded-lg" src="{{asset('images/logo.jpg')}}" alt="Logo">
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
                            <input id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-teal-600 focus:border-teal-600 sm:text-sm" placeholder="Tafuta..." type="search">
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
                            <img class="h-8 w-8 rounded-full" src="{{asset('images/user.jpeg')}}" alt="User profile">
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

    <!-- Main Content -->
    <div id="main-content" class="pt-16 min-h-screen">
        <!-- Breadcrumb Navigation -->
        <div class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex items-center">
                        <button id="menu-toggle" class="p-2 rounded-md text-gray-700 hover:text-gray-900 focus:outline-none">
                            <i class="fas fa-address-book text-3xl text-teal-600 mb-3"></i>
                        </button>
                        <div class="ml-4 text-gray-500 flex items-center text-sm">
                            <span>Dashboard</span>
                            <i class="fas fa-chevron-right mx-2 text-xs"></i>
                            <span class="text-teal-700 font-medium">Wasiliana Nasi</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded-lg text-sm flex items-center">
                            <i class="fas fa-phone mr-2"></i> Piga Simu Sasa
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-16 md:mb-0">
            
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-teal-800">Wasiliana Nasi</h1>
                <div class="h-1 w-24 bg-teal-500 mx-auto my-4"></div>
                <p class="text-lg text-gray-600">Tuko hapa kukusaidia na maswali yako yote kuhusu kilimo cha kisasa</p>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10">
                <div class="lg:col-span-2">
                    <div class="card bg-white rounded-xl shadow-md p-6 lg:p-8">
                        <h2 class="text-xl font-bold text-teal-700 mb-6">Tuma Ujumbe</h2>
                        
                        <form class="space-y-6" action="{{route('products.ujumbe')}}" method="POST">
                        @csrf 
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Jina Kamili</label>
                                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" required>
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Namba ya Simu</label>
                                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500">
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Barua Pepe</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" required>
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Mada</label>
                                <select id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" required>
                                    <option value="" selected disabled>Chagua mada...</option>
                                    <option value="ushauri">Ushauri wa Kilimo</option>
                                    <option value="teknolojia">Teknolojia za Kilimo</option>
                                    <option value="mafunzo">Mafunzo na Warsha</option>
                                    <option value="ushirikiano">Fursa za Ushirikiano</option>
                                    <option value="nyingine">Nyingine</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Ujumbe Wako</label>
                                <textarea id="message" name="message" rows="6" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" required></textarea>
                            </div>
                            
                            <div class="flex items-center">
                                <input id="agree" name="agree" type="checkbox" class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded" required>
                                <label for="agree" class="ml-2 block text-sm text-gray-700">Ninakubali kupokea mawasiliano kutoka Kilimo Smart</label>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                    <i class="fas fa-paper-plane mr-2"></i> Tuma Ujumbe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
             
                <div class="lg:col-span-1">
                    <div class="grid grid-cols-1 gap-6">
                        
                        <div class="card bg-white rounded-xl shadow-md p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-teal-100 rounded-full p-3 mr-4">
                                    <i class="fas fa-map-marker-alt text-teal-700 text-xl"></i>
                                </div>
                                <h3 class="font-medium text-gray-800">Ofisi Yetu Kuu</h3>
                            </div>
                            <p class="text-gray-600 ml-14">
                                Jengo la Green House, Ghorofa ya 3<br>
                                Barabara ya Kilimo, Mikocheni<br>
                                Dar es Salaam, Tanzania
                            </p>
                        </div>
                        
                      
                        <div class="card bg-white rounded-xl shadow-md p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-teal-100 rounded-full p-3 mr-4">
                                    <i class="fas fa-phone-alt text-teal-700 text-xl"></i>
                                </div>
                                <h3 class="font-medium text-gray-800">Wasiliana Nasi</h3>
                            </div>
                            <div class="text-gray-600 ml-14 space-y-2">
                                <p><strong>Simu:</strong> +255 756 123 456</p>
                                <p><strong>WhatsApp:</strong> +255 756 123 456</p>
                                <p><strong>Barua Pepe:</strong> info@kilimosmart.co.tz</p>
                            </div>
                        </div>
                        
                        <div class="card bg-white rounded-xl shadow-md p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-teal-100 rounded-full p-3 mr-4">
                                    <i class="fas fa-clock text-teal-700 text-xl"></i>
                                </div>
                                <h3 class="font-medium text-gray-800">Saa za Kazi</h3>
                            </div>
                            <div class="text-gray-600 ml-14 space-y-2">
                                <p><strong>Jumatatu - Ijumaa:</strong> 8:00 - 17:00</p>
                                <p><strong>Jumamosi:</strong> 9:00 - 13:00</p>
                                <p><strong>Jumapili:</strong> Tunafunga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            <div class="card bg-white rounded-xl shadow-md mb-10 overflow-hidden">
                <div class="aspect-w-21 aspect-h-9 h-64 w-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63492.94230759544!2d35.7213834!3d-6.1731174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de51f385beda9%3A0x7fafcf8fb36b5fb8!2sDodoma%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1714415000000!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
          
            <div class="bg-gradient-to-r from-teal-500 to-teal-700 rounded-xl shadow-md mb-10 overflow-hidden">
                <div class="p-6 md:p-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div class="mb-6 md:mb-0">
                            <h3 class="text-xl font-bold text-white mb-2">Unahitaji Ushauri wa Haraka?</h3>
                            <p class="text-teal-100">Wasiliana na wataalam wetu wa ushauri wa kilimo moja kwa moja kwenye laini yetu ya msaada.</p>
                        </div>
                        <div>
                            <a href="tel:+255756123456" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-teal-700 bg-white hover:bg-teal-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-700 focus:ring-white">
                                <i class="fas fa-phone-alt mr-2"></i> Piga Simu Sasa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
           
            <div class="mb-10">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-teal-800">Ofisi Zetu Nyingine</h2>
                    <div class="h-1 w-20 bg-teal-500 mx-auto my-4"></div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="card bg-white rounded-xl shadow-md p-6">
                        <h4 class="text-lg font-medium text-teal-700 mb-4">Arusha</h4>
                        <div class="space-y-3 text-gray-600">
                            <p class="flex items-start">
                                <i class="fas fa-map-marker-alt text-teal-600 mt-1 mr-3"></i>
                                <span>Barabara ya Njiro, karibu na Shoppers Plaza</span>
                            </p>
                            <p class="flex items-start">
                                <i class="fas fa-phone-alt text-teal-600 mt-1 mr-3"></i>
                                <span>+255 755 987 654</span>
                            </p>
                            <p class="flex items-start">
                                <i class="fas fa-envelope text-teal-600 mt-1 mr-3"></i>
                                <span>arusha@kilimosmart.co.tz</span>
                            </p>
                        </div>
                    </div>
                    
                    
                    <div class="card bg-white rounded-xl shadow-md p-6">
                        <h4 class="text-lg font-medium text-teal-700 mb-4">Mwanza</h4>
                        <div class="space-y-3 text-gray-600">
                            <p class="flex items-start">
                                <i class="fas fa-map-marker-alt text-teal-600 mt-1 mr-3"></i>
                                <span>Kitalu Na. 15, Jengo la Green Tower, Mwanza</span>
                            </p>
                            <p class="flex items-start">
                                <i class="fas fa-phone-alt text-teal-600 mt-1 mr-3"></i>
                                <span>+255 721 782 837</span>
                            </p>
                            <p class="flex items-start">
                                <i class="fas fa-envelope text-teal-600 mt-1 mr-3"></i>
                                <span>mwanza@kilimosmart.co.tz</span>
                            </p>
                        </div>
                    </div>
                    
                   
                    <div class="card bg-white rounded-xl shadow-md p-6">
                        <h4 class="text-lg font-medium text-teal-700 mb-4">Dodoma</h4>
                        <div class="space-y-3 text-gray-600">
                            <p class="flex items-start">
                                <i class="fas fa-map-marker-alt text-teal-600 mt-1 mr-3"></i>
                                <span>Jengo la CRDB, Ghorofa ya 2, Barabara ya Uhindini</span>
                            </p>
                            <p class="flex items-start">
                                <i class="fas fa-phone-alt text-teal-600 mt-1 mr-3"></i>
                                <span>+255 621 782 837</span>
                            </p>
                            <p class="flex items-start">
                                <i class="fas fa-envelope text-teal-600 mt-1 mr-3"></i>
                                <span>Dodoma@kilimosmart.co.tz</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
          
            <div class="text-center mb-10">
                <h3 class="text-xl font-medium text-teal-700 mb-6">Tufuate kwenye Mitandao ya Kijamii</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full border-2 border-teal-500 text-teal-500 hover:bg-teal-500 hover:text-white transition-colors">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full border-2 border-teal-500 text-teal-500 hover:bg-teal-500 hover:text-white transition-colors">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full border-2 border-teal-500 text-teal-500 hover:bg-teal-500 hover:text-white transition-colors">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full border-2 border-teal-500 text-teal-500 hover:bg-teal-500 hover:text-white transition-colors">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full border-2 border-teal-500 text-teal-500 hover:bg-teal-500 hover:text-white transition-colors">
                        <i class="fab fa-linkedin-in text-lg"></i>
                    </a>
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
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-dollar-sign text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Bei</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2 active">
                <i class="fas fa-envelope text-teal-600"></i>
                <span class="text-xs mt-1 text-teal-700">Wasiliana</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-ellipsis-h text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">More</span>
            </a>
        </div>
    </div>
    
    <script>
       
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