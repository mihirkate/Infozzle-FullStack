@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-semibold mb-4">User Details</h1>
        
        <div class="mb-4">
            <strong class="text-lg">Name:</strong>
            <p>{{ $user->name }}</p>
        </div>
        
        <div class="mb-4">
            <strong class="text-lg">Email:</strong>
            <p>{{ $user->email }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-lg">Created At:</strong>
            <p>{{ $user->created_at->format('d M Y') }}</p>
        </div>

        <!-- You can add more fields as needed -->
        <div class="mb-4">
            <strong class="text-lg">Last Updated:</strong>
            <p>{{ $user->updated_at->format('d M Y') }}</p>
        </div>

        <!-- Actions -->
        <div class="mt-6">
            <a href="{{ route('users') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to Users</a>
        </div>
    </div>
</div>
@endsection
