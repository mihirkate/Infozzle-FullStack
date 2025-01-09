@section('content')
<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 bg-purple-600 text-white p-4">
        <h1 class="text-xl font-bold">Dashboard</h1>
        <ul class="mt-4">
            <li class="mt-2"><a href="/dashboard" class="hover:underline">All Users</a></li>
            <li class="mt-2"><a href="/products" class="hover:underline">All Products</a></li>
            <li class="mt-2"><a href="/logout" class="hover:underline">Sign Out</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="w-3/4 p-4">
        <h2 class="text-2xl font-bold">All Users</h2>
        <table class="min-w-full mt-4 border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 p-2">Id</th>
                    <th class="border border-gray-300 p-2">First Name</th>
                    <th class="border border-gray-300 p-2">Last Name</th>
                    <th class="border border-gray-300 p-2">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-2">1</td>
                    <td class="border border-gray-300 p-2">Test</td>
                    <td class="border border-gray-300 p-2">developer</td>
                    <td class="border border-gray-300 p-2">srinath.uj@ifozzle.com</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">2</td>
                    <td class="border border-gray-300 p-2">Test</td>
                    <td class="border border-gray-300 p-2">developer</td>
                    <td class="border border-gray-300 p-2">srinath.uj@ifozzle.com</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
@endsection
