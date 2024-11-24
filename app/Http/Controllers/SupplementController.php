<?php

namespace App\Http\Controllers;

use App\Models\Supplement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupplementController extends Controller
{
    public function index()
    {
        return view('supplements.index', [
            "supplements" => Supplement::all()
        ]);
    }

    public function create()
    {
        return view('supplements.create');
    }

    public function store(Request $request)
    {
        // Validate Data
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string'
        ]);

        // Capitalize first character
        $validatedData['name'] = Str::ucfirst($validatedData['name']);

        // Store
        Supplement::create($validatedData);

        // Redirect to index
        return redirect()->route('supplements.index');
    }

    public function edit(int $id)
    {
        // Find supplement
        $supplement = Supplement::findOrFail($id);

        return view('supplements.edit', [
            'supplement' => $supplement
        ]);
    }

    public function update(Request $request, int $id)
    {
        // Validate Data
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string'
        ]);

        // Capitalize first character
        $validatedData['name'] = Str::ucfirst($validatedData['name']);

        $supplement = Supplement::find($id);

        $supplement->update($validatedData);

        return redirect()->route('supplements.index');
    }

    public function destroy(int $id)
    {
        Supplement::findOrFail($id)->delete();

        return redirect()->route('supplements.index');
    }
}
