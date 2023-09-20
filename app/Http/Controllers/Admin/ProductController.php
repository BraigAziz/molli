<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $products = Product::with('images')->get();
        //return $products;
        return view('admin.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the data
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required',
            'short_description' => 'max:255',
            'slug' => 'unique:products,slug',
        ]);
        // Store the product
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->price = $request->price;
        $product->variants = $request->variants;
        $product->additional = $request->additional_information;

        $product->slug = Str::slug($product->title, '-');

        // Handle the image uploads
        if ($request->hasFile('first_image')) {
            $path = $request->file('first_image')->store('products/images', 'public');

            $product->image = $path;

        }
        $product->save();

        // Handle gallery images
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $path = $image->store('products/gallery', 'public');

                // Create a new product image instance and link it to the product
                $product->images()->create(['image' => $path]);
            }
        }

        // Return a response or redirect
        return redirect()->back()->with('success', 'Product added successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->with('images')->firstOrFail();
        return view('front.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
