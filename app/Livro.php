<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
protected $table='livro';
    
    protected $fillable = [
        'titulo',
        'ano_lancamento',
        'genero_id',
        'editora_id',
        'autor_id'
    ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    

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
