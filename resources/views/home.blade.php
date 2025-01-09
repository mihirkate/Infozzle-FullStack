<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom gradient background */
        .landing-page {
            background: rgb(255,255,255); 
            background: linear-gradient(353deg, rgba(255,255,255,1) 0%, rgba(233,233,233,1) 26%, rgba(92,30,243,0.988) 97%);
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Landing Page Content -->
    <div class="landing-page flex flex-col items-center justify-center min-h-screen text-center">
        
        <h1 class="text-4xl font-bold mb-4 text-gray-900">Welcome to Our Application!</h1>
        <p class="text-xl mb-6 text-gray-800">Your one-stop solution for managing products and more.</p>
        
        <!-- Call to Action Button -->
        <a href="/products" class="bg-white text-blue-500 px-6 py-3 rounded-full text-lg hover:bg-gray-200">
            Explore Products
        </a>
        @if(auth()->check()) <!-- Check if user is logged in -->
        <!-- Show only the Explore Products button for logged-in users -->
    @else
        <!-- Show Sign In link if the user is not logged in -->
        <div class="mt-8">
            <p class="text-gray-800">Or,
                <a href="{{ route('login') }}" class="underline text-blue-500">Sign In</a> to get started.
            </p>
        </div>
    @endif
        
    </div>

   

</body>
</html>
