<?php

namespace App\Models;

use App\Models\Chamado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alvo extends Model
{
    use HasFactory;

    public $timestamps = false ; 
    protected $fillable = ['nome','descricao'];

    public function chamados()
    {
        return $this->belongsToMany(Chamado::class,'chamados_alvo','alvo_id','chamado_id');
    }
    protected static function booted()
    {
        self::addGlobalScope('ordered',function(Builder $queryBuilder){
            $queryBuilder->orderBy('nome');
        });
    }
}
