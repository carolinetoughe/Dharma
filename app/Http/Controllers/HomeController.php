<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('accueil');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::guard()->User();
        $patient3=User::whereHas('roles', function($q){$q->whereIn('name', ['Patient']);})->get();
        $roles = Role::orderBy('id','DESC')->paginate(5);
        $patient = Role::where('name','Patient')->get();
        $patient2 = Role::where('name','Patient')->count();
        return view('home', compact('user','patient','patient2','roles','patient3'));
    }
    public function accueil()
    {
        $data = User::get();
        return view('index',compact('data'));
    }
    public function compter()
    {
        $nbr = User::get()->count();
        return view('\layouts\approle',compact('nbr'));

    }
    public function patienttotal()
    {
        $patients = User::where('roles','Patient')->count();
        return view('home',compact('patients'));
    }
    public function patientdashboard()
    {
        return view('patients/patientdashboard');
    }
    
    
}
