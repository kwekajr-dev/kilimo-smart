<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KilimoSmart | Jisajili</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-image: url('{{ asset('images/bbf.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-container {
            max-width: 420px;
            background: rgba(255, 255, 255, 0.97);
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            margin: auto;
            text-align: center;
        }

        .logo {
            width: 90px;
            margin: 10px auto 10px;
            border-radius: 50%;
            box-shadow: 0 2px 8px rgba(0, 128, 0, 0.4);
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        .input-field:focus {
            border-color: #22c55e;
            box-shadow: 0 0 8px rgba(34, 197, 94, 0.5);
        }

        .register-button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #0d1137, #0d1137);
            color: white;
            font-weight: bold;
            border-radius: 10px;
            transition: 0.3s;
            cursor: pointer;
            border: none;
            margin-top: 20px;
        }

        .register-button:hover {
            background: linear-gradient(45deg, #15803d, #1e9d48);
            transform: scale(1.04);
        }

        i {
            color: green;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="form-container">
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold"><i class="fas fa-exclamation-triangle mr-2"></i>Oops!</strong>
            <ul class="mt-2 list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <h1 class="text-2xl font-bold mb-4 flex items-center justify-center gap-2">
            <i class="fas fa-leaf"></i> Kilimo Smart
        </h1>

        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo">

        <form action="{{ route('products.sendData') }}" method="POST" enctype="multipart/form-data">
           @csrf 

            <div class="mb-4 text-left">
                <label for="name" class="text-gray-700 font-medium">
                    <i class="fas fa-user mr-2"></i>Jina Kamili:
                </label>
                <input type="text" id="name" name="name" class="input-field" required>
            </div>

            <div class="mb-4 text-left">
                <label for="telephone" class="text-gray-700 font-medium">
                    <i class="fas fa-phone mr-2"></i>Nambari ya Simu:
                </label>
                <input type="tel" id="telephone" name="telephone" class="input-field" required>
            </div>

            <div class="mb-4 text-left">
                <label for="password" class="text-gray-700 font-medium">
                    <i class="fas fa-key mr-2"></i>Neno Siri:
                </label>
                <input type="password" id="password" name="password" class="input-field" required>
            </div>

            <div class="mb-4 text-left">
                <label for="password_confirmation" class="text-gray-700 font-medium">
                    <i class="fas fa-lock mr-2"></i>Rudia Neno Siri:
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="input-field" required>
            </div>

            <button type="submit" class="register-button">
                <i class="fas fa-user-plus mr-2"></i>Jisajili Sasa
            </button>

            <div class="mt-4 text-sm">
                <p>Umeshajisajili? <a href="{{ route('products.login') }}" class="text-blue-700 hover:underline">Bofya hapa</a></p>
            </div>
        </form>
    </div>

   
    <footer class="bg-[#0d1137] text-white mt-10">
        <div class="max-w-6xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="text-center md:text-left">
                <h3 class="font-semibold text-lg">Kilimo Smart</h3>
                <p class="text-sm text-blue-200">Tunawezesha wakulima kupata taarifa sahihi kuhusu hali ya hewa na mbinu bora za kilimo.</p>
            </div>
            <div class="flex items-center gap-4 text-sm">
                <a href="#" class="hover:underline">Nyumbani</a>
                <a href="#" class="hover:underline">Msaada</a>
                <a href="#" class="hover:underline">Wasiliana Nasi</a>
            </div>
            <div class="text-sm text-blue-300 text-center md:text-right">
                <p>&copy; {{ date('Y') }} Kilimo Smart. Haki zote zimehifadhiwa.</p>
            </div>
        </div>
    </footer>

</body>
</html>
