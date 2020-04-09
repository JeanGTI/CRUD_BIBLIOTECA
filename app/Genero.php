<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function livro(){

        return $this ->hasMany(Livro::class,'genero_id');
       
    }
}
