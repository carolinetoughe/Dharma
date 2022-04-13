<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nom' => 'Patient', 
            'prenom' => 'Zero',   
            'numero' => '0',
            'datenaissance'=>'1212-12-12',
            'image' =>'utiilisateurs/O7pIMgB2jW3xy5lc8XHF36SIxHSdpGwCzvrklati.jpg',
        	'email' => 'patientzero@gmail.com',
            'password' => bcrypt('patientzero')
        ]);

        
  
        $role = Role::create(['name' => 'Patient']);
   
        $permissions = Permission::create(['name' => 'patient-edit']);
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
    }
}
