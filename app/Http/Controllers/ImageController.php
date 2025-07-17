<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        return view('upload'); // Make sure you have this view
    }

    public function store(Request $request)
    {
        echo "Test";
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'image' => 'required|image|max:2048'
        // ]);

        // $path = $request->file('image')->store('uploads', 'public');

        // Image::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image_path' => $path
        // ]);

        // return redirect()->route('images.index')->with('success', 'Image uploaded successfully!');
    }
}
