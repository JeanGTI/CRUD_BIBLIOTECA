<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'Genero';

    protected $fillable = [
        'nome'
    ];

    public function livro(){

        return $this ->hasMany(Livro::class,'genero_id');
       
    }
}
