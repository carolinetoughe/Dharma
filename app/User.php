<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Fichesoin;
use Carbon\Carbon;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom','numero','image','datenaissance','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function horaire()
    {
        return $this->hasOne('App\Horaire');
    }
    public function rendezvous()
    {
    return $this->hasMany('App\Rendezvous');
    }
    public function fichesoin()
    {
    return $this->belongsToMany(Fichesoin::class,'fichesoin_user');
    }
    public function consultationenfant()
    {
    return $this->hasMany('App\Consultationenfant');
    }
    public function adresse()
    {
    return $this->hasOne('App\Adresse');
    }
    public function getAgeAttribute()
    {
    return Carbon::parse($this->attributes['datenaissance'])->age;
    }
    public function getCreatedAtAttribute($date)
    {
    return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y H:i:s');
    }
    
}
