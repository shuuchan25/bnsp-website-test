<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    function index()
    {
        $datas = About::first();
        return view('admin.about', compact('datas'));
    }


    public function update(AboutRequest $request)
    {
        $validate = $request->validated();

        $data = About::first();

        if (isset($validate['video'])) {
            $validate['video'] = $this->transformYoutubeUrl($validate['video']);
        }

        if ($request->hasFile('image')) {
            // Hapus gambar lama dari storage jika ada
            if ($data->image) {
                Storage::delete($data->image);
            }

            // Simpan gambar baru di storage/about
            $imagePath = $request->file('image')->store('images/about', 'public');

            // Set path gambar baru ke model
            $validate['image'] = $imagePath;
        } else {
            // Jika tidak ada gambar yang diunggah, hapus 'image' dari $validate
            unset($validate['image']);
        }

        if ($data->update($validate)) {
            return redirect('/admin/about')->with('success', 'Data updated successfully.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Data failed update']);
        }
    }

    private function transformYoutubeUrl($url)
    {
        $videoId = $this->extractVideoId($url);
        return "https://www.youtube.com/embed/{$videoId}";
    }

    private function extractVideoId($url)
    {
        // Extract video ID from YouTube URL
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $params);
        return isset($params['v']) ? $params['v'] : null;
    }

}