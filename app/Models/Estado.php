<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function interacoes()
    {
        return $this->hasMany(Interacao::class,'interacao_id');
    }
}
