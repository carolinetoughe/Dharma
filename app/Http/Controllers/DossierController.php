<?php

namespace App\Http\Controllers;
use App\User;
use App\Patient;
use Illuminate\Http\Request;

class DossierController extends Controller
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
        // dd($user);
        $users = User::get();
        return view('dossiers/dossierajout',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User $users
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'taille' => 'required',
            'profession' => 'required',
            'user_id' => 'required',
    
        ]);
        $form_data = array(
            'taille'       =>   $request->taille,
            'grossesseanterieure'        =>   $request->grossesseanterieure,
            'profession'        =>   $request->profession,
            'avortement'        =>   $request->avortement,
            'regles'       =>   $request->regles,
            'user_id'        =>   $request->user_id,
            'cesarienne'       =>   $request->cesarienne,
            'nbreEnfant'        =>   $request->nbreEnfant,
            'dateAccouchement'        =>   $request->dateAccouchement,
        );
        Patient::create($form_data);
        return redirect()->route('patientliste')
                    ->with('Bravo','nouveau dossier ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
