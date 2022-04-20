<?php

namespace App;
use App\User;
use App\Patient;
use App\Rendezvous;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'pressionarterielle','poids','cicatrice','volumeuterien','saignement','fievre','douleurs','contractions','coeurfoetal','col','rendezvous_id','user_id','patient_id'
    ];
    public function user()
{
    return $this->belongsTo('App\User');
}
public function patient()
{
    return $this->belongsTo('App\Patient');
}
public function ficheanalyse()
{
    return $this->hasOne('App\Ficheanalyse');
}
public function ordonnance()
{
    return $this->hasOne('App\Ordonnance');
}
public function rendezvous()
{
    return $this->belongsTo('App\Rendezvous');
}
public function document()
{
    return $this->hasMany('App\Document');
}
public function hospitalisation()
{
    return $this->hasOne('App\Document');
}
}