<?php
  
use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nom' => 'Etoughe', 
            'prenom' => 'christelle',
            'numero' => '45',
            'datenaissance'=>'1996-08-30',
            'image' =>'utiilisateurs/zsD6VIa8a63hBsS3Xr0V6z3u9PFqGwEVSWVPlOwG.jpg',
        	'email' => 'etoughe@gmail.com',
            'password' => bcrypt('etoughemdp')
        ]);
  
        $role = Role::create(['name' => 'Administrateur']);
   
        $permissions = Permission::pluck('id','id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
    }
}