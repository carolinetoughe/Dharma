<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fichesoin;

class Soin extends Model
{
    protected $fillable = [
        'nom'
    ];
    public function fichesoin()
 {
    return $this->belongsToMany(Fichesoin::class,'fichesoin_soin');
 }
 }
