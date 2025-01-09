@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">All Products</h1>
    
    @if(session('success'))
        <div class="bg-green-500 text-white p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($products as $product)
            <div class="border p-4 rounded shadow">
                <h3 class="text-xl font-semibold">{{ $product->name }}</h3>
                <p class="text-gray-600">Price: ${{ $product->price }}</p>
                <div class="mt-2">
                    @if($product->image)
                        <!-- Make the image clickable to route to the product details page -->
                        <a href="{{ route('products.show', $product->id) }}">
                            <img src="{{ $product->image }}" alt="Product Image" class="w-full h-48 object-cover rounded cursor-pointer">
                        </a>
                    @else
                        <p>No image available</p>
                    @endif
                </div>

                <!-- Edit and Delete Buttons -->
                <div class="mt-4 flex justify-between">
                <a href="{{ route('products.edit', $product->id) }}" style="background-color: #352c48;" class="text-white px-4 py-2 rounded">Edit</a>

                    <!-- Delete form -->
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
