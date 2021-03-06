<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    protected $fillable = [
        'quartier','ville','pays','user_id'
    ];
    public function user()
{
    return $this->belongsTo('App\User');
}
}
