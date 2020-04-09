<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $fillable = [
        'nome'
    ];
    public function livro(){

        return $this ->hasMany(Livro::class,'editora_id');
       
    }
}
