<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profil', 'UserController@profil')->name('profil');
Route::get('/profil/edit', 'UserController@profiledit')->name('profiledit');
Route::get('/patient/liste', 'UserController@patientliste')->name('patientliste');
Route::get('/personnel/liste', 'UserController@personnelliste')->name('personnelliste');
Route::get('/patient/ajout', 'UserController@patientajout')->name('patientajout');
Route::get('/personnel/ajout', 'UserController@personnelajout')->name('personnelajout');
Route::get('/horaire/liste', 'HoraireController@horaireliste')->name('horaireliste');
Route::get('/horaire/ajout', 'HoraireController@create')->name('horaireajout');
Route::get('/medicament/liste', 'MedicamentController@medicamentliste')->name('medicamentliste');
Route::get('/medicament/ajout', 'MedicamentController@create')->name('medicamentajout');

Route::get('/', function () {
    return view('index');
});
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    //Route::resource('services', 'ServiceController');
    //Route::resource('consultations','ConsultationController');
    //Route::resource('disponibilites','DisponibiliteController');
    //Route::resource('analyses','AnalyseController');
    //Route::resource('ficheanalyses','FicheanalyseController');
    Route::resource('rendezvous','RendezvousController');
    //Route::resource('ordonnances','OrdonnanceController');



    //Route::get('/ficheanalyse/{consultation}/create', 'FicheanalyseController@createFiche')->name('create_fiche');
    //Route::post('/ficheanalyse/{consultation}/create', 'FicheanalyseController@store');

    //Route::name ('notification.')->prefix('notification')->group(function () {
    //Route::name ('index')->get ('/', 'NotificationController@index');
    //Route::name ('update')->patch ('{notification}', 'NotificationController@update');

    //});
});
Route::resource('users','UserController');
Auth::routes();
Route::get('user/compte', 'UserController@compte')->name('user.compte');
Route::post('user/compte', 'UserController@store');

Route::get('/deconnexion', 'UserController@deconnexion')->name('deconnexion');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard-patient', function () {
   return view('patients.patientdashboard');
});
Route::get('patient/home', 'HomeController@patientdashboard')->name('patientdashboard')->middleware('patient');
// Route::group(['middleware' => ['patient'], 'prefix' => 'patient'], function () {
//     Route::get('/dashboard-patient', 'UserController@patientdashboard')->name('patientdashboard');
// });