<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class ProductController extends Controller
{
    public function index()
{
    // Fetch all products
    $products = Product::all();
    
    // Return the view with the products data
    return view('allProducts', compact('products'));
}

public function show($id)
{
    // Fetch the product based on the ID
    $product = Product::findOrFail($id);

    // Return the view and pass the product data
    return view('products.show', compact('product'));
}




    public function create()
    {
        return view('addProduct');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|url',  // Validate the image as a URL
        ]);
    
        // Store product with the image URL
        Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'image' => $validated['image'], // Save the URL of the image
            'owner_id' => Auth::id(), // Ensure the logged-in user is the owner
        ]);
    
        // Flash success message to session
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('editProduct', compact('product'));
    }
    
    public function update(Request $request, $id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Check if the current user is the owner
        if (auth()->id() !== $product->owner_id) {
            abort(403, 'You are not authorized to update this product.');
        }

        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
            $product->image = $image;
        }

        // Update product information
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
    
        // Check if the current user is the owner
        if (auth()->id() !== $product->owner_id) {
            abort(403, 'You are not authorized to delete this product.');
        }
    
        // Delete the product
        $product->delete();
    
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
    public function home()
{
    return view('home');
}
public function owner()
{
    return $this->belongsTo(User::class, 'owner_id');
}
    
}
