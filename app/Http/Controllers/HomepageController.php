<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\HeroImage;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        // $agent = new Agent();
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        $heroimages = HeroImage::all();
        $galleries = Gallery::take(6)->orderBy('created_at', 'desc')->get();
        $products = Product::take(10)->orderBy('created_at', 'desc')->get();
        // $reviews = Review::take(10)->orderBy('created_at', 'desc')->get();
        $about = About::first();
        // $arts = Art::take(5)->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('articles', 'heroimages', 'galleries', 'about', 'products'));
    }
}