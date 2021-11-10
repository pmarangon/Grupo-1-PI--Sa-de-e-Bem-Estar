<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
        'nome',
        'esporte',
        'cidade',
        'descricao',
        'link',
        'criado_por',
    ];
}
