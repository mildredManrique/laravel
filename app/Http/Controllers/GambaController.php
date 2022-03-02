<?php

namespace App\Http\Controllers;

use App\Gamba;
use Illuminate\Http\Request;

class GambaController extends Controller
{
    public function index()
    {
        $gamba = Gamba::latest()->get();

        return view('gambas.index', [
            'gambas' => $gamba
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required'],
            'tipo'    => ['required'],
            'color' => ['required'],
        ]);

        Gamba::create([
            'name'  => $request->name,            
            'tipo'  => $request->tipo,
            'color' =>$request->color,
        ]);

        return back();
    }

    public function destroy(Gamba $gamba)
    {
        $gamba->delete();

        return back();
        
    }
}
