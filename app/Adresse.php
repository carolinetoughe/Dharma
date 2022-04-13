<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    protected $fillable = [
        'quartier','ville','pays','id_user'
    ];
    public function user()
{
    return $this->belongsTo('App\User');
}
}
