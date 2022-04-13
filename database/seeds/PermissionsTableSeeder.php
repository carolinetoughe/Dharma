<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
        'rdv-list',
           'rdv-create',
           'rdv-edit',
           'rdv-delete',
           'analyse-list',
           'analyse-create',
           'analyse-edit',
           'analyse-delete',
           'ordonnance-list',
           'ordonnance-create',
           'ordonnance-edit',
           'ordonnance-delete',
           'role-create',
           'role-edit',
           'role-delete',
           'role-list',
           'consultation-list',
           'consultation-edit',
           'consultation-create',
           'consultation-delete',
           'user-edit',
           'user-delete',
           'user-create',
           'user-list',
           'ficheanalyse-edit',
           'ficheanalyse-delete',
           'ficheanalyse-create',
           'ficheanalyse-list',
           'horaire-edit',
           'horaire-delete',
           'horaire-create',
           'horaire-list',
           'fichesoin-edit',
           'fichesoin-delete',
           'fichesoin-create',
           'fichesoin-list',
           'hospitalisation-edit',
           'hospitalisation-delete',
           'hospitalisation-create',
           'hospitalisation-list',
           'soin-list',
           'soin-create',
           'soin-edit',
           'soin-delete',
           'chambre-list',
           'chambre-create',
           'chambre-edit',
           'chambre-delete',
           'medicament-list',
           'medicament-create',
           'medicament-edit',
           'medicament-delete',
           'accouchement-list',
        'accouchement-create',
        'accouchement-edit',
        'accouchement-delete',
        'antecedent-list',
           'antecedent-create',
           'antecedent-edit',
           'antecedent-delete',
           'document-list',
           'document-create',
           'document-edit',
           'document-delete',
           'consultationenfant-list',
           'consultationenfant-create',
           'consultationenfant-edit',
           'consultationenfant-delete',
           'enfant-create',
           'enfant-edit',
           'enfant-delete',
           'enfant-list',
           
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}