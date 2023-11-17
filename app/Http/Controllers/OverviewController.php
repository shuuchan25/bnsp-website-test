<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        // $newsData = Info::count();
        // $articleData = Article::count();
        // $artData = Art::count();
        // $reviewData = Review::count();
        // $scheduleData = Schedule::count();


        return view('admin.overviews');
    }
}