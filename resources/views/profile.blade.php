@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <!-- Heading Section -->
    <h1 class="text-2xl font-bold mb-6">Your Profile</h1>

    <!-- Profile Information Section -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold mb-4">Profile Information</h2>

        <!-- Display User Info -->
        <div class="bg-white p-4 rounded shadow-md">
            <div class="mb-4">
                <strong>Name:</strong> {{ Auth::user()->name }}
            </div>
            <div class="mb-4">
                <strong>Email:</strong> {{ Auth::user()->email }}
            </div>
            <div class="mb-4">
                <strong>Joined:</strong> {{ Auth::user()->created_at->format('M d, Y') }}
            </div>
            <!-- Add more user information as needed -->
        </div>
    </div>

    <!-- Edit Profile Section -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold mb-4">Edit Profile</h2>
        <form action="{{ route('users.update') }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Update Profile
                </button>
            </div>
        </form>
    </div>

    <!-- Change Password Section -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold mb-4">Change Password</h2>
        <form action="{{ route('users.changePassword') }}" method="POST">
            @csrf

            <!-- Current Password Field -->
            <div class="mb-4">
                <label for="current_password" class="block text-sm font-medium">Current Password</label>
                <input type="password" name="current_password" id="current_password" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('current_password') border-red-500 @enderror">
                @error('current_password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- New Password Field -->
            <div class="mb-4">
                <label for="new_password" class="block text-sm font-medium">New Password</label>
                <input type="password" name="new_password" id="new_password" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('new_password') border-red-500 @enderror">
                @error('new_password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm New Password Field -->
            <div class="mb-4">
                <label for="new_password_confirmation" class="block text-sm font-medium">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Change Password
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
