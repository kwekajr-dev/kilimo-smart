<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
   
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">My Profile</div>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mb-6">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 text-3xl">
                            {{ substr($user->name, 0, 1) }}
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h3 class="text-gray-500 text-sm">Name</h3>
                        <p class="text-gray-800 font-medium">{{ $user->name }}</p>
                    </div>
                    
                    <div class="mb-4">
                        <h3 class="text-gray-500 text-sm">Telephone</h3>
                        <p class="text-gray-800 font-medium">{{ $user->telephone }}</p>
                    </div>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('profile.settings') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Edit Profile
                    </a>

                        <a href="{{route('products.dashboard')}}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-12 rounded">
                            Back
                        </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>