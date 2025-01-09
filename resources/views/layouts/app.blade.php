<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Sidebar and Navigation -->
    <div class="flex min-h-screen">
        <div style="background-color: #7754F6;" class="text-white p-6 w-64">
            <a href="/">
                <h2 class="text-4xl font-semibold">Dashboard</h2>
            </a>  
            <ul class="p-6 space-y-6 text-justify">
            <li><a href="{{ route('products.create') }}" class="text-xl py-2 hover:text-gray-300">Create Product</a></li>
            <li><a href="{{ route('products.index') }}" class="text-xl py-2 hover:text-gray-300">All Products</a></li>
                <li><a href="{{ route('products.create') }}" class="text-xl py-2 hover:text-gray-300">Add Product</a></li>
                <li><a href="{{ route('users') }}" class="text-xl py-2 hover:text-gray-300">All Users</a></li>
                <li><a href="{{ route('logout') }}" class="text-xl py-2 hover:text-gray-300">Logout</a></li>
                <!-- Add more links here -->
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>
    
</body>
</html>
