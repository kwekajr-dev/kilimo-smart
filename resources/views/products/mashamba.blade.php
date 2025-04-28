<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilimo Smart | Mashamba</title>
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
        
        .card {
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .form-panel {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }
        
        .form-panel.open {
            max-height: 500px;
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
        
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-5px);}
            to {opacity: 1; transform: translateY(0);}
        }

        @keyframes fadeOut {
            from {opacity: 1; transform: translateY(0);}
            to {opacity: 0; transform: translateY(-5px);}
        }
        
        .notification {
            animation: fadeIn 0.4s ease, fadeOut 0.4s ease 4s forwards;
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
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
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
                            <a href="#" class="text-gray-500 hover:text-teal-600">Dashboard</a>
                            <i class="fas fa-chevron-right mx-2 text-xs"></i>
                            <span class="text-teal-700 font-medium">Mashamba Management</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <button id="btnOngezaShamba" class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded-lg text-sm flex items-center">
                            <i class="fas fa-plus mr-2"></i> Ongeza Shamba
                        </button>
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
                                    <i class="fas fa-calendar-check mr-2 text-teal-600"></i> View Schedule
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        @if (session('success'))
        <div id="notification" class="notification fixed top-20 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                <span>{{ session('success') }}</span>
            </div>
        </div>
        @endif
        
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-16 md:mb-0">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
               
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-r from-teal-600 to-teal-800 px-6 py-4">
                        <div class="flex items-center text-white">
                            <i class="fas fa-tractor text-2xl mr-3"></i>
                            <h2 class="font-bold text-xl">My Farms (Mashamba)</h2>
                        </div>
                        
                    </div>
                    

                    
                    <div class="p-6">
                       
                        <div id="formOngezaShamba" class="hidden bg-gray-50 rounded-lg border-l-4 border-teal-500 mb-6">
                            <form action="{{route('products.storeMashamba')}}" method="POST" class="p-4">
                                @csrf
                                <div class="mb-4">
                                    <label for="jina_la_shamba" class="block text-sm font-medium text-gray-700 mb-1">Jina la shamba</label>
                                    <input type="text" name="jina_la_shamba" id="jina_la_shamba" placeholder="Jina la shamba" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="ukubwa_wa_shamba" class="block text-sm font-medium text-gray-700 mb-1">Ukubwa wa shamba</label>
                                    <input type="text" name="ukubwa_wa_shamba" id="ukubwa_wa_shamba" placeholder="Ukubwa wa shamba" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                                </div>
                                
                                <div class="mb-4">
                                    <label for="aina_ya_zao" class="block text-sm font-medium text-gray-700 mb-1">Aina ya zao</label>
                                    <input type="text" name="aina_ya_zao" id="aina_ya_zao" placeholder="Aina ya zao" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                                </div>
                                
                                <div class="flex justify-end">
                                    <button type="button" id="cancelAddFarm" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md mr-2 hover:bg-gray-300">
                                        Cancel
                                    </button>
                                    <button type="submit" class="bg-teal-600 text-white px-4 py-2 rounded-md hover:bg-teal-700">
                                        <i class="fas fa-save mr-1"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        
                        <div class="space-y-4">
                            
                            
                            @foreach($mashamba as $shamba)
                            <div class="card bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-gray-800">{{ $shamba->jina_la_shamba }}</h3>
                                    <div class="flex space-x-2">
                                        <button class="p-1 text-gray-500 hover:text-teal-600" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="p-1 text-gray-500 hover:text-red-600" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="mt-3 flex flex-wrap gap-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800">
                                        <i class="fas fa-ruler-combined mr-1"></i> {{ $shamba->ukubwa_wa_shamba }}
                                    </span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <i class="fas fa-seedling mr-1"></i> {{ $shamba->aina_ya_zao }}
                                    </span>
                                </div>
                            </div>
                            @endforeach
                            
                            @if(count($mashamba) === 0)
                            <div class="text-center py-8">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4">
                                    <i class="fas fa-tractor text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-500">You don't have any farms yet. Create your first farm to get started.</p>
                                <button id="createFirstFarm" class="mt-4 bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-md text-sm">
                                    <i class="fas fa-plus mr-2"></i> Add Your First Farm
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                
                
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-800 px-6 py-4">
                        <div class="flex items-center text-white">
                            <i class="fas fa-calendar-check text-2xl mr-3"></i>
                            <h2 class="font-bold text-xl">Farm Schedule (Ratiba)</h2>
                        </div>
                    </div>
                    
                    <div class="p-6">
                     
                        <button id="btnWekaRatiba" class="mb-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                            <i class="fas fa-plus mr-2"></i> Weka Ratiba
                        </button>
                        
                  
                        <div id="formWekaRatiba" class="hidden bg-gray-50 rounded-lg border-l-4 border-blue-500 mb-6">
                            <form action="{{route('products.storeRatiba')}}" method="POST" class="p-4">
                                @csrf
                                <div class="mb-4">
                                    <label for="shamba_select" class="block text-sm font-medium text-gray-700 mb-1">Shamba</label>
                                    <select name="shamba" id="shamba_select" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        @foreach($mashamba as $shamba)
                                        <option value="{{ $shamba->jina_la_shamba }}">{{ $shamba->jina_la_shamba }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="kazi" class="block text-sm font-medium text-gray-700 mb-1">Kazi</label>
                                    <select name="kazi" id="kazi" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="kupanda">Kupanda</option>
                                        <option value="kumwagilia">Kumwagilia</option>
                                        <option value="kuweka_mbolea">Kuweka mbolea</option>
                                        <option value="kupiga_dawa">Kupiga dawa</option>
                                        <option value="kuvuna">Kuvuna</option>
                                    </select>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="tarehe" class="block text-sm font-medium text-gray-700 mb-1">Tarehe</label>
                                    <input type="date" name="tarehe" id="tarehe" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                
                                <div class="flex justify-end">
                                    <button type="button" id="cancelAddSchedule" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md mr-2 hover:bg-gray-300">
                                        Cancel
                                    </button>
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                                        <i class="fas fa-save mr-1"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                    
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-800 border-b pb-2">Ratiba yako</h3>
                            
                            <div class="mb-4">
                                <label for="filter_shamba" class="block text-sm font-medium text-gray-700 mb-1">Angalia ratiba ya:</label>
                                <select name="filter_shamba" id="filter_shamba" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="all">All Farms</option>
                                    @foreach($mashamba as $shamba)
                                    <option value="{{ $shamba->jina_la_shamba }}">{{ $shamba->jina_la_shamba }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            @foreach($ratiba as $r)
                            @if($r->kazi && $r->tarehe)
                            <div class="card bg-white border border-gray-100 rounded-lg shadow-sm hover:shadow p-4">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        @if($r->kazi == 'kupanda')
                                            <i class="fas fa-seedling text-green-600 text-xl mr-3"></i>
                                        @elseif($r->kazi == 'kumwagilia')
                                            <i class="fas fa-tint text-blue-600 text-xl mr-3"></i>
                                        @elseif($r->kazi == 'kuweka_mbolea')
                                            <i class="fas fa-prescription-bottle text-amber-600 text-xl mr-3"></i>
                                        @elseif($r->kazi == 'kupiga_dawa')
                                            <i class="fas fa-spray-can text-red-600 text-xl mr-3"></i>
                                        @elseif($r->kazi == 'kuvuna')
                                            <i class="fas fa-truck-pickup text-purple-600 text-xl mr-3"></i>
                                        @else
                                            <i class="fas fa-tasks text-gray-600 text-xl mr-3"></i>
                                        @endif
                                        <h3 class="font-semibold text-lg text-gray-800">{{ ucfirst(str_replace('_', ' ', $r->kazi)) }}</h3>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="p-1 text-gray-500 hover:text-blue-600" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="p-1 text-gray-500 hover:text-red-600" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="mt-3 flex flex-wrap gap-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        <i class="fas fa-calendar-day mr-1"></i> {{ date('d M Y', strtotime($r->tarehe)) }}
                                    </span>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            
                            @if(count($ratiba) === 0)
                            <div class="text-center py-8">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4">
                                    <i class="fas fa-calendar-alt text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-500">You don't have any schedules yet. Create your first schedule to get started.</p>
                                <button id="createFirstSchedule" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">
                                    <i class="fas fa-plus mr-2"></i> Add Your First Schedule
                                </button>
                            </div>
                            @endif
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
                    <i class="fas fa-seedling text-teal-600"></i>
                    <span class="text-xs mt-1 text-teal-700">Mashamba</span>
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
    </div>
    
    <script>
        const btnOngezaShamba = document.getElementById('btnOngezaShamba');
        const formOngezaShamba = document.getElementById('formOngezaShamba');
        const btnWekaRatiba = document.getElementById('btnWekaRatiba');
        const formWekaRatiba = document.getElementById('formWekaRatiba');
        
        btnOngezaShamba.addEventListener('click', function() {
            formOngezaShamba.classList.toggle('hidden');
        });

        btnWekaRatiba.addEventListener('click', function() {
            formWekaRatiba.classList.toggle('hidden');
        });

        formOngezaShamba.reset();
   
        window.addEventListener('DOMContentLoaded', () => {
            const popup = document.getElementById('popupSuccess');
            if (popup) {
                setTimeout(() => {
                    popup.style.display = 'none';
                }, 1000); 
            }
        });
    </script>
