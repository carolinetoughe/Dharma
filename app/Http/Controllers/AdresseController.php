<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Adresse;
use Illuminate\Http\Request;

class AdresseController extends Controller
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
        $users = User::get();
        return view('adresses/adresseajout',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'quartier' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'user_id' => 'required',
    
        ]);
        $form_data = array(
            'quartier'       =>   $request->quartier,
            'ville'       =>   $request->ville,
            'pays'       =>   $request->pays,
            'user_id'       =>   $request->user_id,
        );
        Adresse::create($form_data);
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
    public function adressedit()
    {
        $user = Auth::guard()->User();
        $adresses = Adresse::get();
        return view('adresses/adressedit',compact('adresses','user'));
    }
    public function adresseditupdate(Request $request)
    {
        $user = Adresse::find(Auth::User()->id);
        $user->quartier = $request['quartier'];
        $user->ville = $request['ville'];
        $user->pays = $request['pays'];
        $user->save();
  
        return redirect()->route('profil');
    }
}