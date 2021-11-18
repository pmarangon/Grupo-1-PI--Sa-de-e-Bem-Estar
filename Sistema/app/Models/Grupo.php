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
        'membros_atual',
        'membros_maximo',
    ];

    public static function obtemGruposParaUsuario(User $usuario)
    {
        if ($usuario->administrador()) {
            return self::all();
        }

        $questionario = $usuario->questionario()->first();

        $grupos = self::where('cidade', 'like', '%' . $questionario->cidade . '%')
            ->orWhere('esporte', 'like', '%' . $questionario->esporte . '%')
            ->get();

        return $grupos->isEmpty() ? self::all() : $grupos;
    }

    public function cheio(): bool
    {
        return $this->membros_atual >= $this->membros_maximo;
    }
}
