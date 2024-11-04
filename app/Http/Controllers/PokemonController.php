<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokemonRequest;
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
    public function store(StorePokemonRequest $request)
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
        $pokemon = Pokemon::findOrFail($id);

        return view('pages.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePokemonRequest $request, string $id)
    {
        $data = $request->all();
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->nome = $data['nome'];
        $pokemon->specie = $data['specie'];
        $pokemon->abilita = $data['abilita'];
        $pokemon->elemento = $data['elemento'];
        $pokemon->update();
        return redirect()->route('pages.show', $pokemon->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect()->route('pages.index');
    }
}