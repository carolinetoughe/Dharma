<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if(Auth::check() && Auth::User()->whereHas('roles', function($q){$q->whereIn('name', ['Patient']);}))
        // {

        //      return view('patientdashboard')
        //      or route('patientdashboard');

        // }
            //$user = Auth::user();
            if (Auth::check() && Auth::User()->hasRole('Patient'))  
            {
                
                return redirect('patients.patientdashboard');
            } 
            else{
                
                return $next($request);
             }

        
    }
}
