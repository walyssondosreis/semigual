<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function interacoes()
    {
        return $this->hasMany(Interacao::class, 'interacao_id');
    }
    public function usuarios()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
    public function tecnicos()
    {
        return $this->belongsTo(Usuario::class, 'tecnico_id');
    }
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'chamados_categorias','categoria_id','chamado_id');
    }
}
