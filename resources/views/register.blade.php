<!-- resources/views/signin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="grid grid-cols-1 md:grid-cols-2 w-full max-w-3xl">
        <!-- Left Side: Image -->
        <div class="hidden md:block">
            <img src="{{ asset('image.png') }}" alt="Background Image" class="w-full h-full object-cover">
        </div>

        <!-- Right Side: Registration Form -->
        <div class="flex items-center justify-center bg-white p-8 rounded-lg shadow-md">
            <div class="w-96">
                <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                    </div>
                    <button type="submit" class="w-full bg-purple-600 text-white p-2 rounded-md hover:bg-purple-700">Sign Up</button>
                </form>
                <p class="mt-4 text-sm text-gray-600 text-center">Already have an account? <a href="{{ route('login') }}" class="text-purple-600">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
