<?php

namespace App\Http\Controllers;

use App\Models\recettes;
use Illuminate\Http\Request;

class RecettesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recettes = new recettes;
        $recettes->name = $request->input('nomRecette');
        $recettes->type = $request->input('typeRecette');
        $recettes->time = $request->input('timeRecette');
        $recettes->recipe = $request->input('recette');
        $recettes->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function showRecipes(recettes $recipe)
    {
        return view('recettes', [
            'recettes' => $recipe::all()
        ]);
    }

    public function showRecipe($id)
    {
        return view('recette', [
            'recette' => recettes::findOrFail($id)
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recettes  $recettes
     * @return \Illuminate\Http\Response
     */
    public function edit(recettes $recettes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recettes  $recettes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recettes $recettes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recettes  $recettes
     * @return \Illuminate\Http\Response
     */
    public function destroy(recettes $recettes)
    {
        //
    }
}
