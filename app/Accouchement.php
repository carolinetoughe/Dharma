<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hospitalisation;

class Accouchement extends Model
{
    protected $fillable = [
        'date','lieu','typegrossesse','dureetravail','rupture','particularitetravail','heurenaissance','typenaissance','anesthesie','ventouse','voiebasse','cesarienne','presentationnaissance','gemellaire','delaiacc','rupturedeuxieme','presentationdeuxieme','modalité','delivrance','hospitalisation_id'
    ];
    public function hospitalisation()
{
    return $this->belongsTo('App\Hospitalisation::class');
}
public function enfant()
{
    return $this->hasMany('App\Enfant::class');
}
}
