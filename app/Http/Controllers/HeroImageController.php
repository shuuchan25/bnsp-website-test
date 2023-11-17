<?php

namespace App\Http\Controllers;

use App\Models\HeroImage;
use App\Models\ImageOrientation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroImageController extends Controller
{
    public function index()
    {
        $heroimages = HeroImage::all();
        return view('admin.hero-images', compact('heroimages'));
    }


    // Menambahkan gambar baru ke heroimage
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('images/heroimages', 'public');
                $heroImage = new HeroImage();
                $heroImage->image = $path;
                $heroImage->save();
            }
        }

        return redirect('/admin/hero-images')->with('success', 'The new data has been successfully created.');
    }

    // Menghapus gambar dari heroimage
    public function destroy($id)
    {
        $heroimage = HeroImage::findOrFail($id);
        Storage::disk('public')->delete($heroimage->image);
        $heroimage->delete();

        return redirect('/admin/hero-images')->with('success', 'The data has been successfully deleted.');
    }
}