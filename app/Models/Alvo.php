<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Alvo extends Model
{
    use HasFactory;

    public $timestamps = false ; 
    protected $fillable = ['nome','descricao'];

    public function interacoes()
    {
        return $this->hasMany(Interacao::class,'interacao_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered',function(Builder $queryBuilder){
            $queryBuilder->orderBy('nome');
        });
    }
}
