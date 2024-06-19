<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'id_user',
        'autor',
        'titulo',
        'subtitulo',
        'edição',
        'editora',
        'ano_da_publicação',
    ];
    public function relUsers(){
        return $this->hasMany('App\Models\User', foreignKey:'id', localKey:'id_user');
    }
}
