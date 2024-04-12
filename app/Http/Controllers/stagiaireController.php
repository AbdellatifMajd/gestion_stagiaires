<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;

class stagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view ('stagiaires.index')->with([
            'stagiaires'=> $stagiaires 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiaires.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        Stagiaire::create($request->except('_token')); 

        return redirect()->route('stagiaires.index')->with([
            'success' => 'le stagiaire a été ajouté avec succés.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stg = Stagiaire::where('id', $id)->first();
    
    
    
        return view ('stagiaires.edit')->with([
            'stagiaire' => $stg
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $stg = Stagiaire::where('id', $id);
        
 
        $stg->update($request->except('_token', '_method')); 

        return redirect()->route('stagiaires.index')->with([
            'success' => 'le stagiaire a été modifié  avec succés.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $stg = Stagiaire::where('id', $id)->first(); 

        $stg->delete(); 
        return redirect()->route('stagiaires.index')->with([
            'success' => 'le stagiaire a été supprimé  avec succés.'
        ]);
    }
}
