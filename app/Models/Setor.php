<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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
    protected static function booted()
    {
        self::addGlobalScope('ordered',function(Builder $queryBuilder){
            $queryBuilder->orderBy('nome');
        });
    }
}
