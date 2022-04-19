<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Adresse;
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
    public function update(Request $request)
    {
        $path = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
            {
                $this->validate($request, [
                'nom' => 'required',
                'prenom' => 'required',
                'numero' => 'required',
                'datenaissance' => 'required',
                'image' => 'required',
                'email' => 'required|email|unique:users,email,',
                'password' => 'same:confirm-password',
                    ]);
                $path = $image->update('utiilisateurs', 'public');
                $input['image'] = $path;
            }
        else
            {
                $this->validate($request, [
                'nom' => 'required',
                'prenom' => 'required',
                'numero' => 'required',
                'datenaissance' => 'required',
                'email' => 'required|email|unique:users,email,',
                'password' => 'same:confirm-password',
                ]);
            }
                    $input = $request->all();
                if(!empty($input['password']))
                    { 
                        $input['password'] = Hash::make($input['password']);
                    }
                else
                    {
                        $input = array_except($input,array('password'));    
                    }

                $user = User::find(Auth::User()->id);
                $user->update($input);
                return redirect()->route('profil')
                    ->with('success','User updated successfully');
    }
    public function profil(Request $request)
    {
        $adresses = Adresse::get();
        return view('users/profil',compact('adresses'));
    }
    public function profiledit()
    {
        $user = Auth::guard()->User();
        $adresses = Adresse::get();
        return view('users/profiledit',compact('adresses','user'));
    }
    public function profileditupdate(Request $request)
    {
        $user = User::find(Auth::User()->id);
        $user->nom = $request['nom'];
        $user->prenom = $request['prenom'];
        $user->numero = $request['numero'];
        $user->datenaissance = $request['datenaissance'];
        $user->email = $request['email'];

        
        $image = request()->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $path = $image->move('images', $new_name);
        $user->image =$path;
        
        $user->password = $request['password']=Hash::make($request['password']);
        $user->save();
  
        return redirect()->route('profil');
    }
    public function patientliste(Request $request)
    {
        $patient=User::whereHas('roles', function($q){$q->whereIn('name', ['Patient']);})->get();
        return view('users/patientliste',compact('patient'));
    }
    public function patientajout(Request $request)
    {
        return view('users/patientajout');
    }
    public function patientajoutupdate(Request $request)
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
        $path = $image->move('images');
        $input['password'] = Hash::make($input['password']);
        $input['image'] = $path;
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('patientliste')
                        ->with('Bravo','Nouveau Compte Patient Créé!');
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
