<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
  
    public function index()
    {
        $promotions = Promotion::all();
        return view('promotions.index', compact('promotions'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promotions.create');
    }

     public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'time' => 'required|date',
    ]);

    if ($request->hasFile('image')) {
       
        $validated['image'] = $request->file('image')->store('promotions', 'public');

    }

    Promotion::create($validated);

    return redirect()->route('promotions')->with('success', 'Promosi berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $promotions = Promotion::findOrFail($id);
        return view('promotions.show', compact('promotions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);
    
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'time' => 'required|date',
        ]);
    
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('promotions', 'public');
        }
    
        $promotion->update($validated);
    
        return redirect('promotions')->with('success', 'Promosi berhasil diperbarui!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();
    
        return redirect()->route('promotions')->with('success', 'Promosi berhasil dihapus!');
    }
}
