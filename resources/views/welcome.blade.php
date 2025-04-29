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
        
        .hero-section {
            position: relative;
            overflow: hidden;
        }
        
        .hero-image {
            width: 100%;
            height: 600px;
            object-fit: cover;
            opacity: 1;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(16, 185, 129, 0.7), rgba(16, 185, 129, 0.4));
        }
        
        .hero-content {
            position: absolute;
            top: 50%;
            left: 10%;
            transform: translateY(-50%);
            color: white;
            max-width: 600px;
            z-index: 10;
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
                
              
                <div class="hidden md:flex items-center space-x-4">
                    <a href="" class="nav-item text-gray-700 hover:text-teal-600 px-3 py-2">Home</a>
                    <a href="{{route('products.about')}}" class="nav-item text-gray-700 hover:text-teal-600 px-3 py-2">About</a>
                    <a href="#services" class="nav-item text-gray-700 hover:text-teal-600 px-3 py-2">Services</a>
                    <a href="{{route('products.about')}}" class="nav-item text-gray-700 hover:text-teal-600 px-3 py-2">Contact</a>
                </div>
                
                
                <div class="flex items-center space-x-4">
                    <a href="{{route('products.login')}}" class="bg-teal-50 hover:bg-teal-100 text-teal-700 px-4 py-2 rounded-lg text-sm">Login</a>
                    <a href="{{route('products.register')}}" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm">Register</a>
                </div>
            </div>
        </div>
    </nav>

    
    <section id="home" class="hero-section pt-16">
        <div class="relative">
            <img src="{{ asset('images/vg.jpg') }}" alt="Farming Hero Image" class="hero-image">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="text-5xl font-bold mb-4">Harvesting Tomorrow's Harvests Today</h1>
                <p class="text-lg mb-6">Pale ambapo kilimo kinakutana na uvumbuzi. Jukwaa letu linalenga kuwawezesha wakulima kwa teknolojia ya kisasa na suluhisho kamili zinazoboresha uzalishaji na kuhakikisha uendelevu.</p>
                <div class="flex space-x-4">
                    <a href="{{route('products.register')}}" class="bg-teal-700 hover:bg-teal-800 text-white py-2 px-4 rounded-lg text-sm flex items-center">
                        <i class="fas fa-user-plus mr-2"></i> Jisajili Hapa
                    </a>
                    <a href="#subili bado application" class="bg-white hover:bg-gray-100 text-teal-700 py-2 px-4 rounded-lg text-sm flex items-center">
                        <i class="fas fa-download mr-2"></i> Download App
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-10 items-center">
                
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mb-4 text-teal-800">Farming Futures: Innovate, Connect, Thrive</h2>
                    <p class="text-gray-700 mb-6">Katika Kilimo Smart, tumejitolea kuanzisha mustakabali wa kilimo kupitia ubunifu, uunganisho, na mbinu endelevu. Lengo letu ni kuwapa wakulima wa Afrika zana wanazohitaji kuongeza uzalishaji na kuhakikisha usalama wa chakula.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-teal-600 mr-2"></i>
                            <span>Suluhisho za kilimo cha kisasa</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-teal-600 mr-2"></i>
                            <span>Unganisha na masoko na wanunuzi moja kwa moja</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-teal-600 mr-2"></i>
                            <span>Pata ushauri kutoka kwa wataalamu wa kilimo</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

   
    

  
    <section id="portfolio" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-10 text-center text-teal-800">Malengo yetu</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg card">
                    <img src="{{ asset('images/uza.jpg') }}" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-teal-800">Smart Farming Initiative</h3>
                        <p class="text-gray-700 mb-4">Mradi wa kuwasaidia wakulima wadogo kutumia teknolojia ya kisasa na kupata taarifa muhimu za hali ya hewa.</p>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                            Soma zaidi <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-lg card">
                    <img src="{{ asset('images/data2.jpeg') }}" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-teal-800">Agricultural Data Analysis</h3>
                        <p class="text-gray-700 mb-4">Uchambuzi wa data ya kilimo kwa ajili ya kuboresha uzalishaji na kuongeza mapato ya wakulima.</p>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                            Soma zaidi <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-lg card">
                    <img src="{{ asset('images/data4.jpeg') }}" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-teal-800">Community Farm Network</h3>
                        <p class="text-gray-700 mb-4">Mtandao wa wakulima unaolenga kubadilishana uzoefu na kujenga ushirikiano katika sekta ya kilimo.</p>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                            Soma zaidi <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-teal-700 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4 text-white">Uko Tayari Kubadilisha Uzoefu Wako wa Kilimo?</h2>
            <p class="text-white mb-8 max-w-2xl mx-auto">Jiunge na maelfu ya wakulima ambao tayari wananufaika na suluhisho bunifu za kilimo za Kilimo Smart.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#register" class="bg-white text-teal-700 py-3 px-6 rounded-lg font-medium hover:bg-gray-100 transition">
                    Jisajili Sasa
                </a>
                <a href="#download" class="bg-transparent border-2 border-white text-white py-3 px-6 rounded-lg font-medium hover:bg-white hover:text-teal-700 transition">
                    Pakua Programu Yetu
                </a>
            </div>
        </div>
    </section>
    

    <section id="contact" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-10 text-center text-teal-800">Wasiliana Nasi</h2>
            
            <div class="flex flex-col md:flex-row gap-10">
                <div class="md:w-1/2">
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-gray-700 mb-2">Jina Lako</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Barua Pepe</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Ujumbe Wako</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600"></textarea>
                        </div>
                        <button type="submit" class="bg-teal-600 text-white py-2 px-6 rounded-lg hover:bg-teal-700 transition">Tuma Ujumbe</button>
                    </form>
                </div>
                
                <div class="md:w-1/2">
                    <div class="bg-gray-100 p-6 rounded-lg h-full">
                        <h3 class="text-xl font-bold mb-4 text-teal-800">Mawasiliano</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-3 text-teal-600"></i>
                                <p class="text-gray-700">9123 Mtaa Uhindini, DOdoma, Tanzania</p>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone-alt mt-1 mr-3 text-teal-600"></i>
                                <p class="text-gray-700">+255 721 782 837</p>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-3 text-teal-600"></i>
                                <p class="text-gray-700">info@kilimosmart.co.tz</p>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-bold mb-4 mt-6 text-teal-800">Tufuate</h3>
                        <div class="flex space-x-4">
                            <a href="" class="text-teal-600 hover:text-teal-800 transition">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="https://www.instagram.com/kweka__jr?igsh=MTVuNWRwN29kN2RhNA==" class="text-teal-600 hover:text-teal-800 transition">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="https://www.instagram.com/kweka__jr?igsh=MTVuNWRwN29kN2RhNA==" class="text-teal-600 hover:text-teal-800 transition">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="https://www.instagram.com/kweka__jr?igsh=MTVuNWRwN29kN2RhNA==" class="text-teal-600 hover:text-teal-800 transition">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg md:hidden z-10">
        <div class="flex justify-around">
            <a href="#home" class="nav-item flex flex-col items-center py-3 px-2 active">
                <i class="fas fa-home text-teal-600"></i>
                <span class="text-xs mt-1 text-teal-700">Home</span>
            </a>
            <a href="#about" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-info-circle text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">About</span>
            </a>
            <a href="#services" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-cogs text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Services</span>
            </a>
            <a href="#portfolio" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-th text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Portfolio</span>
            </a>
            <a href="#contact" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-envelope text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Contact</span>
            </a>
        </div>
    </div>
    
  
    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start">
                    <img class="h-10 w-10 rounded-lg" src="{{ asset('images/logo.jpg') }}" alt="Logo">
                    <span class="ml-2 text-xl font-bold text-teal-400">Kilimo Smart</span>
                </div>
                <p class="text-sm text-gray-400 mt-2">Tunaunganisha wakulima na technologia na taarifa muhimu za hali ya hewa.</p>
            </div>
            <div class="flex items-center gap-6 text-sm">
                <a href="#home" class="hover:text-teal-400 transition">Nyumbani</a>
                <a href="#about" class="hover:text-teal-400 transition">Kuhusu</a>
                <a href="#services" class="hover:text-teal-400 transition">Huduma</a>
                <a href="#contact" class="hover:text-teal-400 transition">Wasiliana Nasi</a>
            </div>
            <div class="text-sm text-gray-400 text-center md:text-right">
                <p>&copy; 2025 Kilimo Smart. Haki zote zimehifadhiwa.</p>
            </div>
        </div>
    </footer>

    <script>
       
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
            });
        }
        
        const profileTrigger = document.querySelector('.profile-trigger');
        const profileDropdown = document.querySelector('.profile-dropdown');
        
        if (profileTrigger && profileDropdown) {
            profileTrigger.addEventListener('click', () => {
                profileDropdown.classList.toggle('show');
            });
            
            document.addEventListener('click', (event) => {
                if (!profileTrigger.contains(event.target) && !profileDropdown.contains(event.target)) {
                    profileDropdown.classList.remove('show');
                }
            });
        }
    </script>
</body>
</html>