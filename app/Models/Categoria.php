<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Categoria extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = ['nome','descricao'];

    public function chamados()
    {
        return $this->hasMany(Chamado::class,'chamado_id');
    }
}
