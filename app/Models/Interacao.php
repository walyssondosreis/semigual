<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Interacao extends Model
{
    use HasFactory;

    protected $table = 'interacoes';
    const CREATED_AT = 'datah_ini';
    const UPDATED_AT = 'datah_alt';

    public function alvos()
    {
        return $this->belongsTo(Alvo::class,'alvo_id');
    }
    public function estados()
    {
        return $this->belongsTo(Estado::class,'estado_id');
    }
    public function chamados()
    {
        return $this->belongsTo(Chamado::class,'chamado_id');
    }
}
