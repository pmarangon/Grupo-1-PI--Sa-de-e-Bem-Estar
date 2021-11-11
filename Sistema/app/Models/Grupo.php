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

    public static function obtemGruposParaUsuario(User $usuario)
    {
        if ($usuario->administrador()) {
            return self::all();
        }

        $questionario = $usuario->questionario()->first();

        return self::where('cidade', 'like', '%' . $questionario->cidade . '%')
            ->orWhere('esporte', 'like', '%' . $questionario->esporte . '%')
            ->get();
    }
}
