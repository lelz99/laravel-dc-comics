<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        $request->validate([
            'title' => 'string',
            'description' => 'nullable',
            'thumb' => 'nullable|url:http,https',
            'price' => 'nullable',
            'sale_date' => 'nullable|date',
            'type' => 'string|in:Libro,Fumetto'
        ]);

        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        
        return to_route('comics.show', $comic->id);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'string',
            'description' => 'nullable',
            'thumb' => 'nullable|url:http,https',
            'price' => 'nullable',
            'sale_date' => 'nullable|date',
            'type' => 'string|in:Libro,Fumetto'
        ]);
        $data = $request->all();
        $comic->update($data);

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
