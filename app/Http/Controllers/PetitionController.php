<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use App\Http\Resources\PetitionResource;
use Illuminate\Http\Request;
use App\Http\Resources\PetitionCollection;
use Symfony\Component\HttpFoundation\Response;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $petitions = Petition::all();
        // return view('petitions.index')->with('petitions', $petitions);
        // return PetitionResource::collection(Petition::all());
        // return new PetitionCollection(Petition::all());
        return response(new PetitionCollection(Petition::all()), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $petition = Petition::create($request->only([   
            'title',
            'author',
            'description',
            'category',
            'signees'
        ])); 

        return new PetitionResource($petition);

    }

    /**
     * Display the specified resource.
     */
    public function show(Petition $petition)
    {
        return new PetitionResource($petition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petition $petition)
    {
        $petition->update($request->only([
            'title',
            'author',
            'description',
            'category',
            'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petition $petition)
    {
        $petition->delete();
        return response(null, response::HTTP_I_AM_A_TEAPOT);
    }
}
