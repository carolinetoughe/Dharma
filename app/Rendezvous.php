<?php

namespace App;
use App\User;
use App\Patient;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    protected $fillable = [
        'daterdv','motif','heure','statut','id_soignant','id_patient','id_secretaire'
    ];
    public function user()
{
    return $this->belongsTo('App\User');
}
public function patient()
{
    return $this->belongsTo('App\Patient');
}
public function consultation()
{
    return $this->hasOne('App\Rendezvous');
}
}