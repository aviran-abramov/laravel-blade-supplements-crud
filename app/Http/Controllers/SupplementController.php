<?php

namespace App\Http\Controllers;

use App\Http\Requests\Supplement\StoreSupplementRequest;
use App\Http\Requests\Supplement\UpdateSupplementRequest;
use App\Models\Supplement;
use Illuminate\Http\RedirectResponse;
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

    public function store(StoreSupplementRequest $request): RedirectResponse
    {
        // Validate Data
        $validatedData = $request->validated();

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

    public function update(UpdateSupplementRequest $request, int $id): RedirectResponse
    {
        // Validate Data
        $validatedData = $request->validated();

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
