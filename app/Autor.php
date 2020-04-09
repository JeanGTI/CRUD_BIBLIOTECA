<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'nome',
        'nacionalidade',
        'ano_nascimento',
        'sexo'
    ];
    public function livro(){

        return $this ->hasMany(Livro::class, 'autor_id');
       
    }
}
