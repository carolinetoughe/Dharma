<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Disponibilite;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
     
    $this->middleware('auth')->except('logout','compte','create','liste','store','show','edit','destroy');
    }
    public function compte()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.compte',compact('roles'));
    }
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required',
            'image' => 'required',
            'datenaissance'=>'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'roles' => 'required'

        ]);

        $input = $request->all();

        $image = request()->file('image');
        $path = $image->store('utiilisateurs', 'public');
        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('utilisateurs/'), $new_name);


        $input['password'] = Hash::make($input['password']);

        $input['image'] = $path;
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('home')
                        ->with('success','User created successfully');
    }
    public function profil(Request $request)
    {
        return view('users/profil');
    }
    public function profiledit(Request $request)
    {
        return view('users/profiledit');
    }
    public function patientliste(Request $request)
    {
        return view('users/patientliste');
    }
    public function patientajout(Request $request)
    {
        return view('users/patientajout');
    }
    public function personnelliste(Request $request)
    {
        return view('users/personnelliste');
    }
    public function personnelajout(Request $request)
    {
        return view('users/personnelajout');
    }
    public function deconnexion()
    {
        auth()->logout();
        return redirect('/');
    }
    public function patientdashboard(Request $request)
    {
        return view('patients.patientdashboard');
    }
    public function patienttotal()
    {
        $patients = User::where('roles','Patient')->count();
        return view('home',compact('patients'));
    }
    
}
