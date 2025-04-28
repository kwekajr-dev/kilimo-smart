<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KilimoSmart | Uza Mazao</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            min-height: 100vh;
            padding-top: 80px;
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
        
        .top-nav-icon {
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .top-nav-icon:hover {
            color: #10b981;
            transform: scale(1.1);
        }
        
        .form-container {
            max-width: 600px;
            width: 100%;
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            transition: all 0.3s ease;
        }
        
        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .input-field {
            width: 100%;
            padding: 0.75rem 1rem;
            margin-top: 0.5rem;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            outline: none;
        }
        
        .input-field:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
        }
        
        .submit-button {
            width: 100%;
            padding: 0.75rem;
            background: #10b981;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            margin-top: 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: none;
        }
        
        .submit-button:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }
        
        .logo {
            width: 60px;
            margin: 0 auto 1rem;
        }
        
        .footer-text {
            font-size: 0.8rem;
            color: #64748b;
            margin-top: 1.5rem;
            text-align: center;
        }
        
        label {
            display: block;
            margin-bottom: 0.25rem;
            font-weight: 500;
            color: #334155;
        }
        
        label i {
            color: #10b981;
            margin-right: 0.5rem;
        }
        
        .form-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        
        .form-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0f172a;
            display: flex;
            align-items: center;
        }
        
        .form-title i {
            margin-right: 0.5rem;
            color: #10b981;
        }
        
        .form-group {
            margin-bottom: 1.25rem;
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
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md fixed top-0 w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo and Brand -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-10 w-10 rounded-lg" src="{{ asset('images/logo.jpg') }}" alt="Logo">
                        <span class="ml-2 text-xl font-bold text-teal-800">Kilimo Smart</span>
                    </div>
                </div>
                
                <!-- Search -->
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
                
                <!-- User Icons -->
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
                    
                    <!-- User Profile -->
                    <div class="relative">
                        <div class="profile-trigger flex items-center cursor-pointer">
                            <img class="h-8 w-8 rounded-full" src="{{ asset('images/user.jpeg') }}" alt="User profile">
                            <span class="ml-2 text-sm font-medium text-gray-700">Mkulima</span>
                            <i class="fas fa-chevron-down ml-1 text-gray-500 text-xs"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="bg-white shadow-sm border-b border-gray-200 mb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center">
                <div class="flex items-center">
                    <div class="ml-4 text-gray-500 flex items-center text-sm">
                        <a href="#" class="hover:text-teal-600">Dashboard</a>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <a href="#" class="hover:text-teal-600">Sokoni</a>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <span class="text-teal-700 font-medium">Uza Mazao</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Container -->
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-title">
                <i class="fas fa-shopping-cart text-teal-600"></i>Uza Mazao
            </h1>
        </div>
        
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo rounded-full">

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="product">
                    <i class="fas fa-seedling"></i>Aina ya nafaka
                </label>
                <input type="text" id="product" name="product" class="input-field" placeholder="Ingiza aina ya mazao" required>
            </div>

            <div class="form-group">
                <label for="image">
                    <i class="fas fa-image"></i>Upload Picha
                </label>
                <input type="file" id="image" name="image" accept="image/*" class="input-field p-2">
            </div>

            <div class="form-group">
                <label for="description">
                    <i class="fas fa-align-left"></i>Maelezo
                </label>
                <textarea id="description" name="description" class="input-field" placeholder="Ingiza maelezo" rows="3" required></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="form-group">
                    <label for="quantity">
                        <i class="fas fa-balance-scale"></i>Kiasi cha mazao
                    </label>
                    <input type="number" id="quantity" name="quantity" class="input-field" placeholder="Ingiza kiasi" required>
                </div>

                <div class="form-group">
                    <label for="price">
                        <i class="fas fa-coins"></i>Bei
                    </label>
                    <input type="number" id="price" name="price" class="input-field" placeholder="Ingiza bei kwa TZS" required>
                </div>
            </div>

            <div class="form-group">
                <label for="address">
                    <i class="fas fa-map-marker-alt"></i>Mahali mzigo ulipo
                </label>
                <input type="text" id="address" name="address" class="input-field" placeholder="Ingiza mahali" required>
            </div>

            <button type="submit" class="submit-button">
                <i class="fas fa-paper-plane mr-2"></i>Tuma
            </button>
            
            <p class="footer-text">&copy; 2025 Kilimo Smart. All rights reserved.</p>
        </form>
    </div>

    <!-- Mobile Bottom Navigation -->
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

    <script>
        // Profile dropdown toggle
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