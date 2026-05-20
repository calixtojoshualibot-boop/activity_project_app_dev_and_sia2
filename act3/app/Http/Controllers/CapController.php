<?php

namespace App\Http\Controllers;

use App\Models\Cap;
use Illuminate\Http\Request;

class CapController extends Controller
{
    public function index(Request $request) {
        $query = Cap::query();

        // BONUS: Search Functionality
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('brand', 'like', '%' . $request->search . '%');
        }

        // BONUS: Pagination (6 items per page)
        $caps = $query->latest()->paginate(6);
        return view('caps.index', compact('caps'));
    }

    public function create() {
        return view('caps.create');
    }

    public function store(Request $request) {
        // BONUS: Request Validation
        $validated = $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required',
            'era' => 'required',
            'condition' => 'required',
            'image_url' => 'nullable|url'
        ]);

        Cap::create($validated);
        return redirect()->route('caps.index')->with('success', 'Cap added to vault!');
    }

    public function show(Cap $cap) {
        return view('caps.show', compact('cap'));
    }

    public function edit(Cap $cap) {
        return view('caps.edit', compact('cap'));
    }

    public function update(Request $request, Cap $cap)
{
    // Validate the incoming data
    $validated = $request->validate([
        'name' => 'required|max:255',
        'brand' => 'required',
        'era' => 'required',
        'condition' => 'required',
        'image_url' => 'nullable|url', // Validation ensures it's a real link
    ]);

    // Save changes to Database
    $cap->update($validated);

    return redirect()->route('caps.index')->with('success', 'Cap details and image updated!');
}

    public function destroy(Cap $cap) {
        $cap->delete();
        return redirect()->route('caps.index')->with('danger', 'Cap removed.');
    }
}