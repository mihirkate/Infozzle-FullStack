@extends('layouts.app')

@section('content')
<div class="container mx-auto py-4">
    <h1 class="text-xl font-bold mb-4">Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Correct HTTP method for updating -->

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Product Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="w-full border border-gray-300 rounded px-2 py-1">
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-medium">Price</label>
            <input type="text" name="price" id="price" value="{{ old('price', $product->price) }}" class="w-full border border-gray-300 rounded px-2 py-1">
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium">Image URL</label>
            <input type="text" name="image" id="image" value="{{ old('image', $product->image) }}" class="w-full border border-gray-300 rounded px-2 py-1">
            <!-- Optional: Show the current image URL as a preview -->
            <div class="mt-2">
                <p class="text-sm text-gray-500">Current Image:</p>
                <img src="{{ $product->image }}" alt="Product Image" class="max-w-xs mt-1 rounded" />
            </div>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Product</button>
    </form>
</div>
@endsection
