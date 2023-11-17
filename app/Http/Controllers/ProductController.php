<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Product::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $products = $query->paginate(10);

        return view('admin.products.index', compact('products', 'search'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.detail', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:products',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'price' => 'required|int',
            'description' => 'required',
        ]);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->slug = $validatedData['slug'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];

        $imagePath = $request->file('image')->store('images/products', 'public');
        $product->image = $imagePath;

        $product->save();

        return redirect('/admin/products')->with('success', 'New product data create successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'price' => 'required|integer',
            'description' => 'required',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|max:255|unique:products';
        }

        $validatedData = $request->validate($rules);

        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];


        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image);

            $imagePath = $request->file('image')->store('images/products', 'public');
            $product->image = $imagePath;
        }

        $product->slug = $validatedData['slug'] ?? $product->slug;

        $product->save();

        return redirect('/admin/products/' . $product->slug)->with('success', 'Product data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image);

        // Hapus data dari basis data
        $product->delete();

        return redirect('/admin/products')->with('success', 'Product data deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}