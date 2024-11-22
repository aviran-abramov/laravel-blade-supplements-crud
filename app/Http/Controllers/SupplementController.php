<?php

namespace App\Http\Controllers;

use App\Models\Supplement;
use Illuminate\Http\Request;

class SupplementController extends Controller
{
    public function index()
    {
        return view('supplements.index', [
            "supplements" => Supplement::all()
        ]);
    }
}
