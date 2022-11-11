<?php

namespace App\Models;

use App\Models\Chamado;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setores';
    public $timestamps = false ;
    protected $fillable = ['nome','descricao'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class,'usuario_id');
    }
    public function chamados()
    {
        return $this->hasMany(Chamado::class, 'chamado_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered',function(Builder $queryBuilder){
            $queryBuilder->orderBy('nome');
        });
    }
}
