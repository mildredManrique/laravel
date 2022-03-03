<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::latest()->get();

        return view('pokemones.pokemon', [
            'pokemones' => $pokemon
        ]);
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name'   => ['required'],
            'tipo'    => ['required'],
            'defensa' => ['required'],
        ]);

        Pokemon::create([

            'name'   => $request->name,
            'tipo'    => $request->tipo,
            'defensa' => $request->defensa,
        ]);

        return back();
    }

    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();

        return back();
    }
}
