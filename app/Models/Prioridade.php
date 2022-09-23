<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioridade extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function chamados()
    {
        return $this->hasMany(Chamado::class,'chamado_id');
    }
}
