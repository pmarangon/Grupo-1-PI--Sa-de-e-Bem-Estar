<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
