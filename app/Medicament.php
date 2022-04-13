<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ordonnance;
class Medicament extends Model
{
    /**
    * The attributes that are mass assignable.
    *	
    * @var array
    */
   protected $fillable = [
       'nom'
   ];
   public function ordonnance()
{
   return $this->belongsToMany(Ordonnance::class,'medicament_ordonnance');
}
}
