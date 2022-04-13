<?php

namespace App;
use App\Fichesoin;
use App\Chambre;
use App\Consultation;
use Illuminate\Database\Eloquent\Model;

class Hospitalisation extends Model
{
    protected $fillable = [
        'datedebut','datefin','motif','statut','sejour','id_consultation','id_chambre','id_fichesoin'
    ];
    public function consultation()
    {
        return $this->belongsTo('App\Consultation');
    }
    public function chambre()
    {
        return $this->belongsTo('App\Chambre');
    }
    public function fichesoin()
    {
        return $this->belongsTo('App\Fichesoin');
    }
    public function accouchement()
    {
        return $this->hasOne('App\Accouchement');
    }
}
