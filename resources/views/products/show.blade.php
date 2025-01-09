@extends('layouts.app')

@section('content')
<div class="container mx-auto py-4">
    <div class="flex justify-between">
        <h1 class="text-xl font-bold">{{ $product->name }}</h1>
        
        @auth
            @if(Auth::id() === $product->owner_id)
                <div>
                <a href="{{ route('products.edit', $product->id) }}" class="text-white px-4 py-2 rounded" style="background-color: #352c48;">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                    </form>
                </div>
            @endif
        @endauth
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 shadow-xl">
        <!-- Left: Product Image -->
        <div class="flex justify-center items-center p-4 bg-white rounded-lg shadow-xl">
            @if($product->image)
                <!-- Since image is stored as a URL, use it directly -->
                <img src="{{ $product->image }}" alt="Product Image" class="w-full max-w-md rounded-lg shadow-md">
            @else
                <p>No image available</p>
            @endif
        </div>

        <!-- Right: Product Details -->
        <div>
            <p class="mt-4"><strong>Product ID:</strong> {{ $product->id }}</p>
            <p class="mt-4"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            
            <!-- Owner Name -->
            @if($product->owner)
                <p class="mt-4"><strong>Owner Name:</strong> {{ $product->owner->name }}</p>
            @else
                <p class="mt-4"><strong>Owner Name:</strong> Not available</p>
            @endif

            <!-- Created and Updated At -->
            <p class="mt-4"><strong>Created At:</strong> {{ $product->created_at->format('M d, Y h:i A') }}</p>
            <p class="mt-4"><strong>Last Updated At:</strong> {{ $product->updated_at->format('M d, Y h:i A') }}</p>

            <!-- Display the description or a fallback message if none exists -->
            <p class="mt-4"><strong>Description:</strong> {{ $product->description ?? 'No description available.' }}</p>
        </div>
    </div>
</div>
@endsection
