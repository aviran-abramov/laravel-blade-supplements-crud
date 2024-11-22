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
}
