<?php

namespace App\Models;

use App\Models\Alvo;
use App\Models\Setor;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Interacao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chamado extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $attributes = [
        'prioridade'=>0,
    ];

    protected $fillable= ['usuario_id','prioridade','tecnico_id','categoria_id','setor_id'];

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
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    public function setores()
    {
        return $this->belongsTo(Setor::class,'setor_id');
    }
    public function alvos()
    {
        return $this->belongsToMany(Alvo::class,'chamados_alvos','alvo_id','chamado_id');
    }
}
