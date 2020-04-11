<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $table = 'Editora';

    protected $fillable = [
        'nome'
    ];
    public function livro(){

        return $this ->hasMany(Livro::class,'editora_id');
       
    }
}
