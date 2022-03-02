<?php

namespace App\Http\Controllers;

use App\Vacuna;
use Illuminate\Http\Request;

class VacunaController extends Controller
{
    public function index()
    {
        $vacuna = Vacuna::latest()->get();

        return view('vacunas.vacuna', [
            'vacunas' => $vacuna
        ]);
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name'   => ['required'],
            'age'    => ['required'],
            'vacuna' => ['required'],
        ]);

        Vacuna::create([

            'name'   => $request->name,
            'age'    => $request->age,
            'vacuna' => $request->vacuna,
        ]);

        return back();
    }

    public function destroy(Vacuna $vacuna)
    {
        $vacuna->delete();

        return back();
    }
}
