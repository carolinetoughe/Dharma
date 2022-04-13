<?php

namespace App;
use App\User;
use App\Soin;
use Illuminate\Database\Eloquent\Model;

class Fichesoin extends Model
{
    protected $fillable = [
        'statut'
    ];
    public function hospitalisation()
{
    return $this->hasOne('App\Hospitalisation');
}
    public function soin()
{
    return $this->belongsToMany(Soin::class,'fichesoin_soin');
}
public function user()
{
    return $this->belongsToMany(User::class,'fichesoin_user');
}
}
