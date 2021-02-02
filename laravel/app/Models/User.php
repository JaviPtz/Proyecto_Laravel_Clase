<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /* Relación de uno a uno */
    public function perfil(){
        return $this->hasOne(Perfil::Class);
    }
    /* referencia al modelo Categoria */
    public function Categoria(){
        return $this->belongTo(Categoria::Class);
    }

    /* referencia al modelo level */
    public function Level(){
        return $this->belongsTo(Level::Class);
    }
    /* referencia al modelo Group */
    public function Group(){
        return $this->belongsTo(Group::Class)->withTimeStamp();
    }
    /* referencia al modelo localizacion */
    /* Un usuario va poder ver una localicación */
    public function Location(){
        return $this->hasOneThrought(Location::Class,Perfil::Class);
    }




}
