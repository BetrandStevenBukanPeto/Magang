<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex w-3/5 bg-white shadow-lg rounded-lg overflow-hidden gap-x-6">
    <!-- Left Side Image -->
    <div class="w-1/2 bg-gray-300 flex items-center justify-center p-12">
        <img src="/img/logo.svg" alt="Logo" class="w-full h-auto object-contain">
    </div>

    <!-- Right Side Login Form -->
    <div class="w-1/2 p-16 flex justify-center items-center">
        <div class="w-full max-w-md">
            <h2 class="text-center text-3xl font-semibold mb-6">Login</h2>
            <form action="{{ route('home') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="flex items-center border rounded-lg px-4 py-3 bg-gray-100">
                        <span class="text-gray-500 pr-3"><i class="fas fa-envelope"></i></span>
                        <input type="email" id="email" name="email" required class="bg-gray-100 w-full outline-none text-lg">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="flex items-center border rounded-lg px-4 py-3 bg-gray-100">
                        <span class="text-gray-500 pr-3"><i class="fas fa-lock"></i></span>
                        <input type="password" id="password" name="password" required class="bg-gray-100 w-full outline-none text-lg">
                    </div>
                </div>
                <div class="flex justify-between mb-6 text-sm">
                    <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 text-lg">Login</button>
            </form>
            <div class="text-center my-6 text-gray-500 text-lg">Or</div>
            <div class="flex justify-center space-x-6">
                <a href="#" class="p-4 border rounded-full hover:bg-gray-200">
                    <i class="fab fa-facebook text-blue-600 text-2xl"></i>
                </a>
                <a href="#" class="p-4 border rounded-full hover:bg-gray-200">
                    <i class="fab fa-instagram text-pink-500 text-2xl"></i>
                </a>
                <a href="#" class="p-4 border rounded-full hover:bg-gray-200">
                    <i class="fab fa-twitter text-blue-400 text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
