<?php

namespace App;
use App\Consultation;
use App\Medicament;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $fillable = [
        'consultation_id'
    ];
    public function consultation()
    {
        return $this->belongsTo('App\Consultation');
    }
        public function medicament()
    {
        return $this->belongsToMany(Medicament::class,'medicament_ordonnance');
    }
}
