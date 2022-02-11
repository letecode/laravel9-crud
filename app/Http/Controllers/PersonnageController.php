<?php

namespace App\Http\Controllers;

use App\Models\Personnage;
use Illuminate\Http\Request;

class PersonnageController extends Controller
{
    /**
     * Affiche la liste des personnages
     */
    public function index()
    {
        $personnages = Personnage::all();
        return view('personnage.index', compact('personnages'));
    }

    /**
     * return le formulaire de creation d'un personange
     */
    public function create()
    {
        return view('personnage.create');
    }

    /**
     * Enregistre un nouveau personnage dans la base de données
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'detail'=> 'required',
            'company' => 'required',
            'fortune' => 'required'
        ]);

        $personnage = new Personnage([
            'nom' => $request->get('nom'),
            'detail' => $request->get('detail'),
            'company' => $request->get('company'),
            'fortune' => $request->get('fortune')
        ]);

        $personnage->save();
        return redirect('/')->with('success', 'Personnage Ajouté avec succès');
    }

    /**
     * Affiche les détails d'un personnage spécifique
     */
    public function show($id)
    {
        $personnage = Personnage::findOrFail($id);
        return view('personnage.show', compact('personnage'));
    }

    /**
     * Return le formulaire de modification
     */
    public function edit($id)
    {
        $personnage = Personnage::findOrFail($id);
        return view('personnage.edit', compact('personnage'));
    }

    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nom'=>'required',
            'detail'=> 'required',
            'company' => 'required',
            'fortune' => 'required'
        ]);

        $personnage = Personnage::findOrFail($id);
        $personnage->nom = $request->get('nom');
        $personnage->detail = $request->get('detail');
        $personnage->company = $request->get('company');
        $personnage->fortune = $request->get('fortune');

        $personnage->update();

        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }

    /**
     * Supprime le personnage dans la base de données
     */
    public function destroy($id)
    {
        $personnage = Personnage::findOrFail($id);
        $personnage->delete();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }
}
