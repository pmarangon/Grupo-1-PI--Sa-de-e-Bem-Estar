<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    use HasFactory;

    protected $table = 'questionario';

    protected $fillable = [
        'esporte',
        'cidade',
        'horario',
        'usuario_id',
    ];
}
