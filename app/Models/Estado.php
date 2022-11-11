<?php

namespace App\Models;

use App\Models\Interacao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estado extends Model
{
    use HasFactory;

    public $timestamps = false;
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
