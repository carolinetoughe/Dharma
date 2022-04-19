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
Route::get('/adresse/edit', 'AdresseController@adressedit')->name('adressedit');
Route::post('/adresse/edit', 'AdresseController@adresseditupdate')->name('adresseditupdate');

Route::get('/profil/edit', 'UserController@profiledit')->name('profiledit');
Route::post('/profil/edit', 'UserController@profileditupdate')->name('profileditupdate');


Route::get('/patient/liste', 'UserController@patientliste')->name('patientliste');
Route::get('/personnel/liste', 'UserController@personnelliste')->name('personnelliste');

Route::get('/patient/ajout', 'UserController@patientajout')->name('patientajout');
Route::post('/patient/ajout', 'UserController@patientajoutupdate')->name('patientajoutupdate');

Route::get('/personnel/ajout', 'UserController@personnelajout')->name('personnelajout');
Route::post('/personnel/ajout', 'UserController@personnelajoutupdate')->name('personnelajoutupdate');

Route::get('/horaire/liste', 'HoraireController@horaireliste')->name('horaireliste');
Route::get('/horaire/ajout', 'HoraireController@create')->name('horaireajout');
Route::get('/medicament/liste', 'MedicamentController@medicamentliste')->name('medicamentliste');
Route::get('/medicament/ajout', 'MedicamentController@create')->name('medicamentajout');
Route::get('/rendezvous/liste', 'RendezvousController@rendezvousliste')->name('rendezvousliste');
Route::get('/role/liste', 'RoleController@roleliste')->name('roleliste');
Route::get('/analyse/liste', 'AnalyseController@analyseliste')->name('analyseliste');
Route::get('/hospitalisation/liste', 'HospitalisationController@hospitalisationliste')->name('hospitalisationliste');
Route::get('/enfant/liste', 'EnfantController@enfantliste')->name('enfantliste');
Route::get('/chambre/liste', 'ChambreController@chambreliste')->name('chambreliste');
Route::get('/soin/liste', 'SoinController@soinliste')->name('soinliste');
Route::get('/fichesoin/liste', 'FichesoinController@fichesoinliste')->name('fichesoinliste');
Route::get('/ficheanalyse/liste', 'FicheanalyseController@ficheanalyseliste')->name('ficheanalyseliste');
Route::get('/ordonnance/liste', 'OrdonnanceController@ordonnanceliste')->name('ordonnanceliste');
Route::get('/consultation/liste', 'ConsultationController@consultationliste')->name('consultationliste');
Route::get('/accouchement/liste', 'AccouchementController@accouchementliste')->name('accouchementliste');



Route::get('/', function () {
    return view('index');
});
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('accouchements', 'AccouchementController');
    Route::resource('consultations','ConsultationController');
    Route::resource('hospitalisations','HospitalisationController');
    Route::resource('horaires','HoraireController');
    Route::resource('analyses','AnalyseController');
    Route::resource('enfants','EnfantController');
    Route::resource('chambres','ChambreController');
    Route::resource('soins','SoinController');
    Route::resource('fichesoins','FichesoinController');
    Route::resource('ficheanalyses','FicheanalyseController');
    Route::resource('rendezvous','RendezvousController');
    Route::resource('ordonnances','OrdonnanceController');
    Route::resource('medicaments','MedicamentController');


    //Route::get('/ficheanalyse/{consultation}/create', 'FicheanalyseController@createFiche')->name('create_fiche');
    //Route::post('/ficheanalyse/{consultation}/create', 'FicheanalyseController@store');



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