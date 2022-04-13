<?php

namespace App;
use App\Ficheanalyse;
use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
     /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'nom'
    ];
    public function ficheanalyse()
{
    return $this->belongsToMany(Ficheanalyse::class,'analyse_ficheanalyse');
}
}
