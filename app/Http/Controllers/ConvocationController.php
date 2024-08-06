<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConvocationCollection;
use App\Http\Resources\ConvocationResource;
use App\Models\Convocation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ConvocationController extends Controller
{
    public function index()
    {
        return Inertia::render('Difussion/Convocations/Index', [
            'convocations' => ConvocationCollection::make(Convocation::paginate(9))
        ]);
    }

    public function show(Request $request)
    {
        return Inertia::render('Difussion/Convocations/Show', [
            'convocation' => ConvocationResource::make(Convocation::where('slug', $request->slug)->first())
        ]);
    }
}
