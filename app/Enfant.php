<?php

namespace App;
use App\Accouchement;
use App\Consultationenfant;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    protected $casts = [
        'nom','prenom','sexe','taille','pt','pc','pb','apgar1','apgar2','sein','cries','cyanose','reanime','commentreanimation','autre','premierjour','allaitement','groupesanguin','id_accouchement'
    ];
    public function accouchement()
    {
        return $this->belongsTo('App\Accouchement');
    }
    public function consultationenfant()
    {
        return $this->hasMany('App\ConsultationEnfant');
    }
}