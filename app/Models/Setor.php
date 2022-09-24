<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setores';
    public $timestamps = false ;
    protected $fillable = ['nome'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class,'usuario_id');
    }
}
