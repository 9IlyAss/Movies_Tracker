<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::paginate(5);
        return view('Movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'genre' => 'required', 
            'release_date' => 'required|date',
            'rating' => 'required|numeric|min:0',
            'duration' => 'required|numeric|min:0',
            'poster_image' => 'nullable|file|mimes:jpg,png|max:2048',  // Optional file upload (poster image)
        ]);
    
        if ($request->hasFile('poster_image')) {
            $file = $request->file('poster_image');
            $path = $file->store('posters', 'public'); // Store the file in the 'posters' folder in the 'public' disk
            $validated['poster_image'] = $path; // Add the file path to the validated data
        }
            Movies::create($validated);
        return redirect()->route('Movies.index')->with('success', 'Movie successfully added!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movies $movies)
    {
        //
    }
}
