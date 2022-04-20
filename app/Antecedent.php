<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Antecedent extends Model
{
    protected $fillable = [
        'nom','user_id'
    ];
    public function user()
{
    return $this->belongsTo('App\User');
}}
