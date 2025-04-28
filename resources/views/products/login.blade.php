<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KilimoSmart | Ingia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    

    <style>
        body {
            background-image: url('{{ asset('images/bbf.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            max-width: 360px;
            background: rgba(255, 255, 255, 0.94);
            border-radius: 20px;
            padding: 30px 35px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            margin: auto;
            text-align: center;
        }

        .heading {
            font-size: 26px;
            font-weight: bold;
            color: #0d1137;
            margin-bottom: 15px;
        }

        .logo {
            width: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
            box-shadow: 0 2px 8px rgba(0, 128, 0, 0.3);
        }

        .input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #0d1137, #0d1137);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-button:hover {
            background: linear-gradient(45deg, #15803d, #1e9d48);
            transform: scale(1.05);
        }

        .social-accounts {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 20px;
        }

        .social-button {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: green;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .social-button:hover {
            transform: scale(1.1);
        }

        .agreement a, .register-link a {
            font-size: 12px;
            color: #0099ff;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        i {
            color: green;
        }

        footer {
            margin-top: auto;
            background-color: #0d1137;
            color: white;
            padding: 0px 0;
        }

        footer .footer-container {
            max-width: 1000px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
            padding: 0 20px;
        }

        footer a {
            color: #93c5fd;
            font-size: 14px;
            margin-left: 12px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        footer p {
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="container">

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="bg-red-600 text-white px-4 py-3 rounded relative mb-4" role="alert" style="text-align: left;">
            <strong class="font-bold"><i class="fas fa-exclamation-circle mr-2"></i>Oops!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif

        @if ($errors->any())
        <div class="bg-red-600 text-white px-4 py-3 rounded relative mb-4" role="alert" style="text-align: left;">
            <strong class="font-bold"><i class="fas fa-exclamation-circle mr-2"></i>Oops!</strong>
            <ul class="mt-2 list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="heading"><i class="fas fa-leaf mr-2"></i>Ingia</div>
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo">

        <form action="{{ route('products.loginProcessing') }}" method="POST" class="form">
            @csrf
            <input class="input" type="tel" name="telephone" id="telephone" placeholder="Namba ya simu" required>
            <input class="input" type="password" name="password" id="password" placeholder="Neno siri" required>
            <button class="login-button" type="submit">
                <i class="fas fa-sign-in-alt mr-2"></i>&nbsp;&nbsp;Ingia
            </button>
        </form>

        <div class="register-link">
            <a href="{{ route('products.register') }}"><i class="fas fa-user-plus mr-1"></i>Jisajili hapa</a>
        </div>

        <div class="social-accounts">
            <button class="social-button">S</button>
            <button class="social-button">M</button>
            <button class="social-button">A</button>
            <button class="social-button">T</button>
        </div>

        <div class="agreement">
            <a href="#">Kilimo biashara kwa maendeleo zaidi</a>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div>
                <h3 class="font-semibold text-lg">Kilimo Smart</h3>
                <p>Tunakuwezesha kwa taarifa sahihi kuhusu hali ya hewa na mbinu bora za kilimo.</p>
            </div>
            <div>
                <a href="#">Nyumbani</a>
                <a href="#">Msaada</a>
                <a href="#">Wasiliana</a>
            </div>
            <div>
                <p>&copy; {{ date('Y') }} Kilimo Smart. Haki zote zimehifadhiwa.</p>
            </div>
        </div>
    </footer>

</body>
</html>
