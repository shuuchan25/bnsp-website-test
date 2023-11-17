<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Gallery::query();

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $galleries = $query->paginate(10);

        return view('admin.galleries.index', compact('galleries', 'search'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('admin.galleries.detail', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:galleries',
            'image' => 'required|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $gallery = new Gallery();
        $gallery->name = $validatedData['name'];
        $gallery->slug = $validatedData['slug'];

        $imagePath = $request->file('image')->store('images/galleries', 'public');
        $gallery->image = $imagePath;

        $gallery->save();

        return redirect('/admin/galleries')->with('success', 'New data created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {

        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
        ];

        if ($request->slug != $gallery->slug) {
            $rules['slug'] = 'required|max:255|unique:galleries';
        }

        $validatedData = $request->validate($rules);

        $gallery->name = $validatedData['name'];


        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($gallery->image);

            $imagePath = $request->file('image')->store('images/galleries', 'public');
            $gallery->image = $imagePath;
        }

        $gallery->slug = $validatedData['slug'] ?? $gallery->slug;

        $gallery->save();

        return redirect('/admin/galleries')->with('success', 'The data has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        // $gallery->rooms->each->delete();

        Storage::disk('public')->delete($gallery->image);

        // Hapus data dari basis data
        $gallery->delete();

        return redirect('/admin/galleries')->with('success', 'The data has been successfully deleted.');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Gallery::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}