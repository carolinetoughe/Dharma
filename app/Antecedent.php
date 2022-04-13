<?php

namespace App;
use App\Patient;
use Illuminate\Database\Eloquent\Model;

class Antecedent extends Model
{
    protected $fillable = [
        'nom','patient_id'
    ];
    public function patient()
{
    return $this->belongsTo('App\Patient');
}}
