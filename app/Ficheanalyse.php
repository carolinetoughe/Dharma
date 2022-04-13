<?php

namespace App;
use App\Analyse;
use App\Consultation;
use Illuminate\Database\Eloquent\Model;

class Ficheanalyse extends Model
{
     /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'consultation_id'
    ];
    public function consultation()
{
    return $this->belongsTo('App\Consultation');
}
    public function analyse()
{
    return $this->belongsToMany(Analyse::class,'analyse_ficheanalyse');
}
}