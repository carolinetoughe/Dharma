<?php

namespace App;
use App\Consultation;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'nom','commentaire','consultation_id'
    ];
    public function consultation()
{
    return $this->belongsTo('App\Consultation');
}}