<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Creco un metodo index (quello che richiamo dalla rotta)

        $pokemon = Pokemon::all(); // adesso ho bisogno di popolare $movies attraverso il model ed il metodo all()
        // Dico al metodo di "tornare" la vista pages.home e con il compact passo anche $pokemon che contiene tutti i dati
        // recuperati dalla tabella nel db
        return view("pages.home", compact("pokemon"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pokemon = $request->all();
        $newPokemon = new Pokemon();
        $newPokemon->nome = $pokemon['nome'];
        $newPokemon->specie = $pokemon['specie'];
        $newPokemon->abilita = $pokemon['abilita'];
        $newPokemon->elemento = $pokemon['elemento'];
        $newPokemon->save();
        return redirect()->route('pages.show', ['id' => $newPokemon->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    // Creo un metodo show (quello che richiamo dalla rotta)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pages.show', compact("pokemon"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
