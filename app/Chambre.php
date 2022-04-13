<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $fillable = [
        'nom','statut'
    ];
    public function hospitalisation()
{
    return $this->hasMany('App\hospitalisation');
}}
