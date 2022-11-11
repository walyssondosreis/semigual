<?php

namespace App\Models;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfis';
    public $timestamps = false;
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
