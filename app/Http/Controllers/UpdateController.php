<?php

namespace App\Http\Controllers;

use App\Http\Resources\UpdateCollection;
use App\Http\Resources\UpdateResource;
use App\Models\Update;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UpdateController extends Controller
{
    public function index()
    {
        return Inertia::render('Difussion/News/Index', [
            'updates' => UpdateCollection::make(Update::paginate(9))
        ]);
    }


    public function show(Request $request)
    {
        return Inertia::render('Difussion/News/Show', [
            'update' => UpdateResource::make(Update::where('slug', $request->slug)->first())
        ]);
    }
}
