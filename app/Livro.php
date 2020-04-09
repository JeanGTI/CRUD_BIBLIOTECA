<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'titulo',
        'ano_lancamento',
        'generos_id',
        'editoras_id',
        'autores_id'
    ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'livro';

    public function genero(){

        return $this ->hasMany(Genero::class,'id','genero_id');
       
    }
    
    public function autor(){

        return $this ->hasMany(Autor::class,'id','autor_id');
       
    }

    public function editora(){

        return $this ->hasMany(Editora::class,'id','editora_id');
       
    }
}
