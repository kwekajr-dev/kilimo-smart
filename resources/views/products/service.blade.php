
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Huduma Zetu - Kilimo Smart</title>
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
        
        .service-banner {
            position: relative;
            overflow: hidden;
        }
        
        .service-banner-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            opacity: 1;
        }
        
        .service-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(16, 185, 129, 0.7), rgba(16, 185, 129, 0.4));
        }
        
        .service-banner-content {
            position: absolute;
            top: 50%;
            left: 10%;
            transform: translateY(-50%);
            color: white;
            max-width: 600px;
            z-index: 10;
        }
        
        .feature-card {
            border-radius: 0.75rem;
            overflow: hidden;
            height: 100%;
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 1.5rem;
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
                    <a href="{{ route('home') }}" class="nav-item text-gray-700 hover:text-teal-600 px-3 py-2">Home</a>
                    <a href="{{ route('products.about') }}" class="nav-item text-gray-700 hover:text-teal-600 px-3 py-2">About</a>
                    <a href="{{ route('products.service') }}" class="nav-item text-teal-600 border-b-2 border-teal-600 px-3 py-2">Services</a>
                    <a href="{{ route('products.about') }}" class="nav-item text-gray-700 hover:text-teal-600 px-3 py-2">Contact</a>
                </div>
                
               
                <div class="flex items-center space-x-4">
                    <a href="{{ route('products.login') }}" class="bg-teal-50 hover:bg-teal-100 text-teal-700 px-4 py-2 rounded-lg text-sm">Login</a>
                    <a href="{{ route('products.register') }}" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm">Register</a>
                </div>
            </div>
        </div>
    </nav>

   
    <section class="service-banner pt-16">
        <div class="relative">
            <img src="{{ asset('images/muhindi.jpg') }}" alt="Services Banner" class="service-banner-image">
            <div class="service-overlay"></div>
            <div class="service-banner-content">
                <h1 class="text-4xl font-bold mb-4">Huduma Zetu</h1>
                <p class="text-lg mb-6">Tunatoa suluhisho za kidijitali na ushauri wa kitaalamu kuongeza uzalishaji na faida kwenye kilimo chako</p>
                <div class="flex space-x-4">
                    <a href="#huduma-zetu" class="bg-white hover:bg-gray-100 text-teal-700 py-2 px-4 rounded-lg text-sm flex items-center">
                        <i class="fas fa-info-circle mr-2"></i> Jifunze Zaidi
                    </a>
                    <a href="{{ route('products.contact') }}" class="bg-teal-700 hover:bg-teal-800 text-white py-2 px-4 rounded-lg text-sm flex items-center">
                        <i class="fas fa-envelope mr-2"></i> Wasiliana Nasi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="huduma-zetu" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-teal-800">Huduma Kuu</h2>
                <div class="w-24 h-1 bg-teal-600 mx-auto my-4"></div>
                <p class="text-gray-700 max-w-3xl mx-auto">Tunaunganisha teknolojia na kilimo kukufanya uzalishe zaidi, uhifadhi mazingira, na upate faida zaidi.</p>
            </div>
            
          
            <div class="flex flex-col md:flex-row items-center mb-16">
                <div class="md:w-1/3 mb-8 md:mb-1 md:pr-8">
                    <img src="{{ asset('images/data4.jpeg') }}" alt="Ushauri wa Kilimo" class="rounded-lg shadow-lg w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4 text-teal-800">Ushauri wa Kilimo</h3>
                    <p class="text-gray-700 mb-8">Pata ushauri wa kitaalamu kutoka kwa wataalam wa kilimo juu ya mbinu bora za kilimo, udhibiti wa wadudu na magonjwa, na matumizi sahihi ya mbolea kwa mazao yako.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Ushauri wa kitaalamu kulingana na aina ya udongo na hali ya hewa</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Vidokezo vya kudhibiti wadudu na magonjwa ya mimea</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Mafunzo ya moja kwa moja kutoka kwa wataalam</span>
                        </li>
                    </ul>
                    <a href="#" class="bg-teal-600 hover:bg-teal-700 text-white py-2 px-4 rounded-lg text-sm inline-flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
          
            <div class="flex flex-col md:flex-row-reverse items-center mb-16">
                <div class="md:w-1/3 mb-8 md:mb-0 md:pl-8">
                    <img src="{{ asset('images/no.jpg') }}" alt="Utabiri wa Hali ya Hewa" class="rounded-lg shadow-lg w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4 text-teal-800">Utabiri wa Hali ya Hewa</h3>
                    <p class="text-gray-700 mb-6">Pata taarifa sahihi za hali ya hewa za eneo lako la kilimo ili uweze kupanga shughuli zako vizuri na kuchukua hatua zinazofaa kwa wakati unaofaa.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Utabiri wa hali ya hewa kwa eneo lako mahususi</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Taarifa za mvua, joto na kiasi cha upepo</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Arifa za dharura za hali ya hewa mbaya</span>
                        </li>
                    </ul>
                    <a href="#" class="bg-teal-600 hover:bg-teal-700 text-white py-2 px-4 rounded-lg text-sm inline-flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            
            <div class="flex flex-col md:flex-row items-center mb-16">
                <div class="md:w-1/3 mb-8 md:mb-0 md:pr-8">
                    <img src="{{ asset('images/nyanya.jpg') }}" alt="Masoko ya Mazao" class="rounded-lg shadow-lg w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4 text-teal-800">Masoko ya Mazao</h3>
                    <p class="text-gray-700 mb-6">Unganisha na wanunuzi moja kwa moja na uuze mazao yako kwa bei nzuri bila kupitia wachuuzi. Pata taarifa za bei elekezi za soko kwa mazao mbalimbali.</p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Unganisha moja kwa moja na wanunuzi wakubwa</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Bei elekezi za mazao mbalimbali masokoni</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Minada ya mazao kupitia jukwaa letu</span>
                        </li>
                    </ul>
                    <a href="#" class="bg-teal-600 hover:bg-teal-700 text-white py-2 px-4 rounded-lg text-sm inline-flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-teal-800">Huduma Zingine</h2>
                <div class="w-24 h-1 bg-teal-600 mx-auto my-4"></div>
                <p class="text-gray-700 max-w-3xl mx-auto">Tumia huduma zifuatazo kuboresha kilimo chako na kuongeza tija na faida</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
               
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md p-6 feature-card">
                    <div class="feature-icon bg-teal-100 text-teal-700">
                        <i class="fas fa-seedling text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-teal-800">Upatikanaji wa Pembejeo</h3>
                    <p class="text-gray-700 mb-4">Pata mbegu bora, mbolea na madawa kwa bei nafuu kupitia mtandao wetu wa wauzaji wa pembejeo walioidhinishwa.</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
               
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md p-6 feature-card">
                    <div class="feature-icon bg-blue-100 text-blue-700">
                        <i class="fas fa-hand-holding-usd text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-teal-800">Huduma za Kifedha</h3>
                    <p class="text-gray-700 mb-4">Tumia rekodi zako za kilimo kufikia mikopo nafuu na huduma za kifedha zilizoratibiwa kwa mahitaji ya wakulima.</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md p-6 feature-card">
                    <div class="feature-icon bg-amber-100 text-amber-700">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-teal-800">Takwimu na Uchambuzi</h3>
                    <p class="text-gray-700 mb-4">Fuatilia maendeleo ya shamba lako, tumia data kufanya maamuzi bora na kupanga mikakati ya baadaye kwa mazao yako.</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md p-6 feature-card">
                    <div class="feature-icon bg-green-100 text-green-700">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-teal-800">Jumuiya ya Wakulima</h3>
                    <p class="text-gray-700 mb-4">Unganisha na wakulima wengine, shirikiana uzoefu na ujifunze mbinu bora za kilimo kutoka kwa wakulima wenzako.</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md p-6 feature-card">
                    <div class="feature-icon bg-red-100 text-red-700">
                        <i class="fas fa-graduation-cap text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-teal-800">Mafunzo ya Kilimo</h3>
                    <p class="text-gray-700 mb-4">Fikia mafunzo ya moja kwa moja, nyenzo za kujifunzia na video za kilimo cha kisasa zinazofaa eneo lako.</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md p-6 feature-card">
                    <div class="feature-icon bg-indigo-100 text-indigo-700">
                        <i class="fas fa-truck text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-teal-800">Usafirishaji wa Mazao</h3>
                    <p class="text-gray-700 mb-4">Pata huduma za usafirishaji wa mazao yako kwa bei nafuu kutoka shambani hadi sokoni au kwa mnunuzi wako.</p>
                    <a href="#" class="text-teal-600 font-medium hover:text-teal-800 transition flex items-center">
                        Jifunze Zaidi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-teal-700 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4 text-white">Tayari Kuboresha Kilimo Chako?</h2>
            <p class="text-white mb-8 max-w-2xl mx-auto">Jiunge na maelfu ya wakulima wanaotumiia Kilimo Smart kuboresha uzalishaji na kupata faida zaidi kutoka kwenye kilimo chao.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('products.register') }}" class="bg-white text-teal-700 py-3 px-6 rounded-lg font-medium hover:bg-gray-100 transition">
                    Jisajili Sasa
                </a>
                <a href="#" class="bg-transparent border-2 border-white text-white py-3 px-6 rounded-lg font-medium hover:bg-white hover:text-teal-700 transition">
                    Wasiliana Nasi
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-teal-800">Maswali Yanayoulizwa Mara kwa Mara</h2>
                <div class="w-24 h-1 bg-teal-600 mx-auto my-4"></div>
                <p class="text-gray-700 max-w-3xl mx-auto">Pata majibu ya maswali yanayoulizwa mara kwa mara kuhusu huduma zetu</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-bold mb-2 text-teal-800">Je, ninahitaji kuwa na simu ya kisasa kutumia huduma za Kilimo Smart?</h3>
                    <p class="text-gray-700">Hapana, huduma zetu zinaweza kufikiwa kupitia simu za kawaida kwa kutumia SMS au kupitia simu janja kwa kutumia programu yetu ya mkononi. Pia tunayo vituo vya huduma kwa jamii kwa wale wasio na simu.</p>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-bold mb-2 text-teal-800">Je, ni lazima kulipa ada ya uanachama kutumia huduma za Kilimo Smart?</h3>
                    <p class="text-gray-700">Huduma zetu za msingi ni bure kwa wakulima wote. Hata hivyo, kuna huduma za ziada zenye malipo kidogo ambazo zinatolewa kwa wakulima wanaohitaji msaada zaidi na ushauri wa kibinafsi.</p>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-bold mb-2 text-teal-800">Je, Kilimo Smart ipo katika mikoa mingapi Tanzania?</h3>
                    <p class="text-gray-700">Tunatoa huduma zetu katika mikoa yote ya Tanzania lakini kwa sasa tuna vituo vya huduma katika mikoa 10. Tunapanga kupanua huduma zetu katika vijijini zaidi mwaka huu.</p>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2 text-teal-800">Je, naweza kupata ushauri wa kibinafsi kuhusu shamba langu?</h3>
                    <p class="text-gray-700">Ndiyo, tunatoa huduma za ushauri wa kibinafsi. Wataalam wetu wanaweza kukutembelea shambani au unaweza kutuma picha na maelezo ya tatizo lako kupitia programu yetu na kupata ushauri unaofaa kwa hali yako mahususi.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Mobile Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg md:hidden z-10">
        <div class="flex justify-around">
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-home text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Home</span>
            </a>
            <a href="#about" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-info-circle text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">About</span>
            </a>
            <a href="#services" class="nav-item flex flex-col items-center py-3 px-2 active">
                <i class="fas fa-cogs text-teal-600"></i>
                <span class="text-xs mt-1 text-teal-700">Services</span>
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
    
    <!-- Footer -->
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
                <a href="#" class="hover:text-teal-400 transition">Nyumbani</a>
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
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        // Mobile menu toggle
const mobileMenuButton = document.querySelector('.mobile-menu-button');
const mobileMenu = document.querySelector('.mobile-menu');

if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

// Close mobile menu when clicking outside
document.addEventListener('click', (event) => {
    if (mobileMenu && !mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
        mobileMenu.classList.add('hidden');
    }
});

// Add smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            
            // Close mobile menu after clicking a link
            if (mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        }
    });
});

// Add active class to nav items based on scroll position
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.nav-item');
    
    let currentSection = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.offsetHeight;
        
        if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
            currentSection = section.getAttribute('id');
        }
    });
    
    navItems.forEach(item => {
        item.classList.remove('active');
        const href = item.getAttribute('href');
        if (href && href.includes(currentSection)) {
            item.classList.add('active');
        }
    });
});

// Initialize search functionality
const searchInput = document.getElementById('search');
if (searchInput) {
    searchInput.addEventListener('keyup', function(e) {
        if (e.key === 'Enter') {
            alert('Search functionality will be implemented soon!');
        }
    });
}
    </script>

</body>
</html>