<?php

namespace App\Models;

use App\Models\Estado;
use App\Models\Chamado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Interacao extends Model
{
    use HasFactory;

    protected $table = 'interacoes';
    const CREATED_AT = 'datah_ini';
    const UPDATED_AT = 'datah_alt';

    public function estados()
    {
        return $this->belongsTo(Estado::class,'estado_id');
    }
    public function chamados()
    {
        return $this->belongsTo(Chamado::class,'chamado_id');
    }
}
