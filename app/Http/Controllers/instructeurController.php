<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\instructeur;


class instructeurController extends Controller
{
    public function index(){
        $instructeur = instructeur::all();
        return view('instructeur.index', ['instructeur'=>$instructeur]);
    }
    public function create(){
        return view('instructeur.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'Voornaam'=>'required',
            'Tussenvoegsel'=>'nullable',
            'Achternaam'=>'required',
            'Mobiel'=>'required|numeric',
            'DatumInDienst'=>'required|date',
            'AantalSterren'=>'required',
        ]);

        $new_instructeur = instructeur::create($data); 

        return redirect(route('instructeur.index'));
    }
    public function edit(instructeur $instructeur){
        return view('instructeur.edit', ['instructeur'=>$instructeur]);
    }
    public function update(Request $request, instructeur $instructeur){
        $data = $request->validate([
            'Voornaam'=>'required',
            'Tussenvoegsel'=>'nullable',
            'Achternaam'=>'required',
            'Mobiel'=>'required|numeric',
            'DatumInDienst'=>'required|date',
            'AantalSterren'=>'required',
        ]);

        $instructeur->update($data);

        return redirect(route('instructeur.index'));
    }
    public function delete(instructeur $instructeur){
        $instructeur->delete();
        return redirect(route('instructeur.index'));
    }
}
