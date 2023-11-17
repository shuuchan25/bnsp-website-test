<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Product::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', '%' . $search . '%');
            });
        }

        $products = $query->orderBy('created_at', 'desc')->paginate(36);

        return view('/products/index', compact('products', 'search'));
    }

    public function show(Product $product)
    {
        // $product->load('images');
        return view('products.detail', compact('product'));
    }
}