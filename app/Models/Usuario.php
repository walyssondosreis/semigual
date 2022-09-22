<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    const CREATED_AT = 'datah_ini';
    const UPDATED_AT = 'datah_alt';

    public function perfis()
    {
        return $this->belongsTo(Perfil::class);
    }
    public function setores()
    {
        return $this->belongsTo(Setor::class);
    }
}
