<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
use App\Models\Grupo as GrupoModel;

class GruposController extends Controller
{
    public function criar(Request $request)
    {
        $dados = $request->all();

        $dados['criado_por'] = \Auth::user()->id;

        GrupoModel::create($dados);

        return redirect()->route('home');
    }

    public function apagar(GrupoModel $grupo)
    {
        $grupo->delete();
    }

    public function entrar(GrupoModel $grupo): string|JsonResponse
    {
        if (! $grupo->cheio()) {
            $grupo->membros_atual += 1;
            $grupo->save();

            return $grupo->link;
        }

        return response()->json(['mensagem' => 'Esse grupo já está cheio!'], 500);
    }
}
