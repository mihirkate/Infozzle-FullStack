@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Product Name</label>
            <input type="text" name="name" id="name" class="border border-gray-300 rounded p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
            <input type="number" name="price" id="price" class="border border-gray-300 rounded p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image URL</label>
            <input type="text" name="image" id="image" class="border border-gray-300 rounded p-2 w-full" placeholder="Enter image URL">
        </div>
        <button type="submit" class="bg-purple-500 text-white py-2 px-4 rounded">Add Product</button>
    </form>
</div>
@endsection
