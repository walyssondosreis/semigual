<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const CREATED_AT = 'datah_ini';
    const UPDATED_AT = 'datah_alt';
	
	protected $fillable = [
        'nome',
        'email',
        'password',
    ];
	protected $hidden = [
        'password',
        'remember_token',
    ]; 
	protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
    public function perfis()
    {
        return $this->belongsTo(Perfil::class,'perfil_id');
    }
    public function setores()
    {
        return $this->belongsTo(Setor::class,'setor_id');
    }
    public function chamados()
    {
        return $this->hasMany(Chamado::class,'chamado_id');
    }

}
