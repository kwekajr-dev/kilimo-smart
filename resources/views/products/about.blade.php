<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Kilimo Smart | Kuhusu</title>
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
        
        .team-card img {
            height: 200px;
            object-fit: cover;
        }
        
        .divider-green {
            height: 3px;
            width: 80px;
            background-color: #10b981;
            display: block;
            margin: 1rem auto;
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
                            <span class="text-teal-700 font-medium">Kuhusu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-16 md:mb-0">
           
            <div class="bg-white rounded-xl shadow-sm p-8 mb-8 text-center">
                <h1 class="text-3xl font-bold text-teal-800 mb-4">Kuhusu Kilimo Smart</h1>
                <div class="divider-green"></div>
                <p class="text-lg text-gray-600 mt-4">Tunaunganisha technolojia na kilimo kwa ustawi  endelevu wa kilimo Afrika Mashariki</p>
            </div>

            <div class="grid grid-cols-1 p-4">
                
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-2xl font-bold text-teal-700 mb-4"><center>Safari Yetu</center></h2>
                    <p class="text-gray-600 mb-4">Kilimo Smart ilianzishwa mwaka 2020 kwa lengo la kuunda mfumo wa kilimo endelevu na unaozingatia teknolojia ya kisasa. Tulianza kama kikundi kidogo cha wakulima, wataalamu wa kilimo na wataalam wa TEHAMA waliojitoa kubadili tasnia ya kilimo.</p>
                    <p class="text-gray-600 mb-4">Leo, tunasimama kama moja ya kampuni zinazoongoza katika sekta ya kilimo-teknolijia Afrika Mashariki, tukihudumia zaidi ya wakulima 10,000 Tanzania, Kenya na Uganda.</p>
                    <p class="text-gray-600">Tumejitolea kuboresha maisha ya wakulima wadogo na wa kati kupitia utatuzi wa changamoto za kilimo kwa kutumia teknolojia rahisi na inayofikika.</p>
                </div>
            </div>

           
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-teal-800">Maadili Yetu</h2>
                <div class="divider-green"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="card bg-white rounded-xl shadow-sm hover:shadow-md p-6 text-center">
                    <div class="bg-teal-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-lightbulb text-teal-700 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Ubunifu</h3>
                    <p class="text-gray-600">Tunaamini nguvu ya ubunifu katika kutatua changamoto ngumu za kilimo. Kila siku, tunafanya kazi kuunda suluhisho mpya na endelevu kwa ajili ya wakulima.</p>
                </div>

                <div class="card bg-white rounded-xl shadow-sm hover:shadow-md p-6 text-center">
                    <div class="bg-teal-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-people-group text-teal-700 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Ujumuishaji</h3>
                    <p class="text-gray-600">Teknolojia zetu zinalenga kuwafikia wakulima wote, bila kujali ukubwa wa shamba. Tunajitahidi kufanya suluhisho zetu ziwe rahisi kufikia na kutumia kwa kila mtu.</p>
                </div>

                <div class="card bg-white rounded-xl shadow-sm hover:shadow-md p-6 text-center">
                    <div class="bg-teal-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-globe text-teal-700 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Endelevu</h3>
                    <p class="text-gray-600">Tunazingatia uhifadhi wa mazingira katika kila teknolojia tunayotengeneza. Suluhisho zetu zinalenga kuboresha mavuno huku zikihifadhi ardhi kwa vizazi vijavyo.</p>
                </div>
            </div>

           
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-teal-800">Timu Yetu</h2>
                <div class="divider-green"></div>
                <p class="text-lg text-gray-600 mt-4 mb-8">Wataalam wa kilimo na teknolojia wanaofanya kazi ya uboreshaji wa mfumo huu wa kisasa Afrika Mashariki</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="card bg-white rounded-xl shadow-sm overflow-hidden">
                    <img src="{{asset('images/brown.jpeg')}}" class="w-full h-48 object-cover" alt="Juma Hassan">
                    <div class="p-4">
                        <h5 class="font-semibold text-gray-800">Brown chongolo</h5>
                        <p class="text-sm text-teal-600 mb-2">Mkurugenzi Mtendaji</p>
                        <p class="text-gray-600 text-sm">Mtaalamu wa kilimo na teknolojia mwenye uzoefu wa miaka 15 katika sekta ya kilimo.</p>
                        <div class="mt-4 flex justify-center space-x-3">
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card bg-white rounded-xl shadow-sm overflow-hidden">
                    <img src="{{asset('images/moses.jpeg')}}" class="w-full h-48 object-cover" alt="Amina Juma">
                    <div class="p-4">
                        <h5 class="font-semibold text-gray-800">Moses kweka</h5>
                        <p class="text-sm text-teal-600 mb-2">Mkuu wa Teknolojia</p>
                        <p class="text-gray-600 text-sm">Mbunifu wa programu kwa ajili ya mifumo ya makini ya kilimo na uchambuzi wa data.</p>
                        <div class="mt-4 flex justify-center space-x-3">
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card bg-white rounded-xl shadow-sm overflow-hidden">
                    <img src="{{asset('images/caro.jpeg')}}" class="w-full h-48 object-cover" alt="Bakari Omary">
                    <div class="p-4">
                        <h5 class="font-semibold text-gray-800">caroline Raphael</h5>
                        <p class="text-sm text-teal-600 mb-2">Mtaalamu wa Kilimo</p>
                        <p class="text-gray-600 text-sm">Mwanasayansi wa mimea na udongo anayetengeneza mbinu mpya za uzalishaji endelevu.</p>
                        <div class="mt-4 flex justify-center space-x-3">
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card bg-white rounded-xl shadow-sm overflow-hidden">
                    <img src="{{asset('images/neema.jpeg')}}" class="w-full h-48 object-cover" alt="Rehema Khamis">
                    <div class="p-4">
                        <h5 class="font-semibold text-gray-800">Neema kweka</h5>
                        <p class="text-sm text-teal-600 mb-2">Mkuu wa Uhusiano na Wakulima</p>
                        <p class="text-gray-600 text-sm">Kiongozi wa programu za mafunzo na mawasiliano na wakulima katika jamii mbalimbali.</p>
                        <div class="mt-4 flex justify-center space-x-3">
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-teal-600 hover:text-teal-800"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-r from-teal-500 to-teal-700 rounded-xl shadow-md p-8 text-center">
                <h3 class="text-2xl font-bold text-white mb-4">Tofauti Yetu</h3>
                <p class="text-lg text-white opacity-90 mb-4">Katika Kilimo Smart, tunaungana na wakulima kujenga mustakabali wa kilimo endelevu na chenye tija zaidi.</p>
                <p class="text-white opacity-90 mb-6">Tunatumia utafiti wa kisayansi, teknolojia ya kisasa, na maarifa ya jadi kuunda suluhisho zinazofaa kwa wakulima wa Afrika Mashariki.</p>
                <a href="#" class="bg-white text-teal-700 hover:bg-gray-100 font-medium py-3 px-6 rounded-lg inline-block transition-all">Wasiliana Nasi Leo</a>
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
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2">
                <i class="fas fa-cloud-sun text-gray-500"></i>
                <span class="text-xs mt-1 text-gray-700">Hali ya Hewa</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-3 px-2 active">
                <i class="fas fa-info-circle text-teal-600"></i>
                <span class="text-xs mt-1 text-teal-700">Kuhusu</span>
            </a>
        </div>
    </div>

    <script>
        // Profile dropdown functionality
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