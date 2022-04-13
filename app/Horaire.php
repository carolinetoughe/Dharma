<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    protected $fillable = [
        'jours','debut','fin','statut','id_user'
    ];
    public function user()
{
    return $this->belongsTo('App\User');
}
}