<?php

namespace App;
use App\User;
use App\Enfant;
use Illuminate\Database\Eloquent\Model;

class Consultationenfant extends Model
{
    protected $casts = [
        'taille','poids','piedbot','perimetrecranien','temperature','freqcard','freqrespi','peau','tete','thorax','adbo','extrem','reflexe','commentaireonsult','user_id','enfant_id'
    ];
    public function enfant()
    {
        return $this->belongsTo('App\Enfant');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
