<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Kilimo Smart - Masoko</title>
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
        
        .product-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.15);
        }
        
        .product-img {
            height: 180px;
            object-fit: cover;
            width: 100%;
            background-color: #f0f0f0;
        }
        
        .badge {
            position: absolute;
            top: 12px;
            right: 12px;
            padding: 4px 8px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .order-btn {
            transition: all 0.2s ease;
        }
        
        .order-btn:hover {
            transform: scale(1.05);
        }
        
        .pagination-btn {
            transition: all 0.2s ease;
        }
        
        .pagination-btn:hover {
            background-color: #e2f2ef;
        }
        
        .filter-dropdown {
            transition: all 0.3s ease;
        }
        .product-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 2rem;
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* Product Card */
.product-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}

/* Product Image */
.product-image {
    height: 220px;
    overflow: hidden;
    position: relative;
    background: #f5f5f5;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.no-image {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #aaa;
    font-size: 1rem;
}

.no-image i {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

/* Product Details */
.product-details {
    padding: 1.5rem;
}

.product-title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #333;
    margin: 0 0 0.5rem 0;
    line-height: 1.2;
}

.product-description {
    color: #666;
    font-size: 0.95rem;
    margin-bottom: 1rem;
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Product Meta Information */
.product-meta {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
    padding: 0.8rem 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
}

.product-quantity, .product-price {
    display: flex;
    flex-direction: column;
}

.product-meta .label {
    font-size: 0.8rem;
    color: #888;
    margin-bottom: 0.2rem;
}

.product-meta .value {
    font-weight: 600;
    color: #333;
    font-size: 1.1rem;
}

.product-meta .unit {
    font-size: 0.8rem;
    color: #888;
    font-weight: 400;
}

.product-price .value {
    color: #e63946;
}

/* Product Location */
.product-location {
    display: flex;
    align-items: center;
    color: #777;
    font-size: 0.9rem;
}

.product-location i {
    margin-right: 0.5rem;
    color: #666;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .product-container {
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 1.5rem;
        padding: 1rem;
    }
    
    .product-image {
        height: 180px;
    }
    
    .product-details {
        padding: 1rem;
    }
    
    .product-title {
        font-size: 1.2rem;
    }
}

@media (max-width: 480px) {
    .product-container {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
}

.seller-contact {
    margin-top: 15px;
    padding: 10px 15px;
    background-color: #f9f9f9;
    border-radius: 5px;
    border-left: 4px solid #10b981;
}

.seller-contact h4 {
    margin-top: 0;
    color: #333;
    font-size: 1.1em;
}

.seller-contact p {
    margin: 8px 0;
    color: #555;
}

.seller-contact i {
    margin-right: 8px;
    color: #4CAF50;
}

.nunua {
    background-color:rgb(69, 204, 206);
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.nunua:hover {
    background-color:rgb(74, 139, 77);
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
                            <input id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-teal-600 focus:border-teal-600 sm:text-sm" placeholder="Search for farm products..." type="search">
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
                            <i class="fas fa-bars text-xl text-teal-600"></i>
                        </button>
                        <div class="ml-4 text-gray-500 flex items-center text-sm">
                            <span>Dashboard</span>
                            <i class="fas fa-chevron-right mx-2 text-xs"></i>
                            <span>Sokoni</span>
                            <i class="fas fa-chevron-right mx-2 text-xs"></i>
                            <span class="text-teal-700 font-medium">Masoko</span>
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
                <a href="#" class="nav-item flex flex-col items-center py-3 px-2 active">
                    <i class="fas fa-shopping-cart text-teal-600"></i>
                    <span class="text-xs mt-1 text-teal-700">Sokoni</span>
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
          
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Masoko: Mazao yaliko sokoni</h1>
                <div class="flex items-center">
                    <span class="text-gray-600 mr-2">View:</span>
                    <button class="p-2 bg-teal-500 text-white rounded-l-md">
                        <i class="fas fa-th"></i>
                    </button>
                    <button class="p-2 bg-gray-200 text-gray-600 rounded-r-md">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
            
           
            <div class="bg-white rounded-xl shadow-sm p-4 mb-6 flex flex-wrap items-center justify-between">
                <div class="flex flex-wrap items-center space-x-3 mb-3 md:mb-0">
                    <span class="font-medium text-gray-700">Filter By:</span>
                    <div class="relative">
                        <select class="bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <option>Mazao yote</option>
                            <option>Mbogamboga</option>
                            <option>Matunda</option>
                            <option>nafaka</option>
                        </select>
                    </div>
                    <div class="relative">
                        <select class="bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <option>Mikoa yote</option>
                        <option>Arusha</option>
                        <option>Dar es Salaam</option>
                        <option>Dodoma</option>
                        <option>Geita</option>
                        <option>Iringa</option>
                        <option>Kagera</option>
                        <option>Kigoma</option>
                       <option>Kilimanjaro</option>
                       <option>Lindi</option>
                       <option>Manyara</option>
                       <option>Mbeya</option>
                       <option>Morogoro</option>
                       <option>Mtwara</option>
                       <option>Nairobi</option>
                       <option>Njombe</option>
                       <option>Pwani</option>
                       <option>Rukwa</option>
                      <option>Ruvuma</option>
                      <option>Shinyanga</option>
                      <option>Singida</option>
                      <option>Tabora</option>
                      <option>Tanga</option>
                        </select>
                    </div>
                    <div class="relative">
                        <select class="bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <option>Mazao Yalipo sasa</option>
                            <option>mazao ya hivi karibu</option>
                            <option>mazao yote</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <span class="font-medium text-gray-700">Sort By:</span>
                    <div class="relative">
                        <select class="bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <option>Bei: ndogo kwenda kubwa</option>
                            <option>Bei: kubwa kwenda ndogo</option>
                        </select>
                    </div>
                </div>
               

            </div>
            <div class="product-container">
    @foreach($products as $product)
        <div class="product-card">
            <div class="product-image">
                @if ($product->image_path)
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->product }}">
                @else
                    <div class="no-image">
                        <i class="fa fa-image"></i>
                        <p>No image available</p>
                    </div>
                @endif
            </div>
            <div class="product-details">
                <h3 class="product-title">{{ $product->product }}</h3>
                <p class="product-description">{{ $product->description }}</p>
                <div class="product-meta">
                    <div class="product-quantity">
                        <span class="label">Quantity:</span>
                        <span class="value">{{ $product->quantity }} <span class="unit">KG</span></span>
                    </div>
                    <div class="product-price">
                        <span class="label">Price:</span>
                        <span class="value">{{ $product->price }} <span class="unit">TSHs</span></span>
                    </div>
                </div>
                <div class="product-location">
                    <i class="fa fa-map-marker"></i>
                    <span>{{ $product->address }}</span>
                </div>
                <button class="nunua" data-product-id="{{ $product->id }}">Nunua mzigo</button>
                
               
                <div class="seller-contact" id="seller-contact-{{ $product->id }}" style="display: none;">
                    <h4>Contact Seller</h4>
                    <p><i class="fa fa-user"></i> {{ $users->seller->name ?? 'N/A' }}</p>
                    <p><i class="fa fa-phone"></i> {{ $users->seller->phone ?? 'N/A' }}</p>

                </div>
            </div>
        </div>
    @endforeach
</div>
</div> </div>       
            
 <script>
 
document.addEventListener('DOMContentLoaded', function() {
    
    const profileTrigger = document.querySelector('.profile-trigger');
    const profileDropdown = document.querySelector('.profile-dropdown');
    
    if (profileTrigger && profileDropdown) {
        profileTrigger.addEventListener('click', function() {
            profileDropdown.classList.toggle('show');
        });
        
        
        document.addEventListener('click', function(event) {
            if (!profileTrigger.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.remove('show');
            }
        });
    }
    
    
    const quickActionsBtn = document.getElementById('quick-actions');
    const quickActionsDropdown = document.getElementById('quick-actions-dropdown');
    
    if (quickActionsBtn && quickActionsDropdown) {
        quickActionsBtn.addEventListener('click', function() {
            quickActionsDropdown.classList.toggle('hidden');
        });
        
        
        document.addEventListener('click', function(event) {
            if (!quickActionsBtn.contains(event.target) && !quickActionsDropdown.contains(event.target)) {
                quickActionsDropdown.classList.add('hidden');
            }
        });
    }
    
    const secondaryNav = document.querySelector('.bg-white.shadow-sm.border-b');
    if (menuToggle && secondaryNav) {
        secondaryNav.parentNode.insertBefore(menuPanel, secondaryNav.nextSibling);
        
        menuToggle.addEventListener('click', function() {
            menuPanel.classList.toggle('open');
        });
    }

    const buyButtons = document.querySelectorAll('.nunua');
    
    
    buyButtons.forEach(button => {
        button.addEventListener('click', function() {
           
            const productId = this.getAttribute('data-product-id');
            
            
            const contactDiv = document.getElementById('seller-contact-' + productId);
            
            if (contactDiv.style.display === 'none') {
                contactDiv.style.display = 'block';
                this.textContent = 'Hide Contact Info';
            } else {
                contactDiv.style.display = 'none';
                this.textContent = 'Nunua mzigo';
            }
        });
    });
});
</script>
</body>
</html>