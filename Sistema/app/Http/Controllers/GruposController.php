<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use App\Models\Grupo as GrupoModel;

class GruposController extends Controller
{
    public function index(): View
    {
        $grupos = GrupoModel::obtemGruposParaUsuario(\Auth::user());

        return view('grupos.listar', ['grupos' => $grupos]);
    }

    public function salvar(Request $request): string
    {
        if ($request->filled('id')) {
            $this->atualizar($request->input('id'), $request->except('id'));
        } else {
            $this->criar($request->all());
        }

        return redirect()->route('grupos-listar');
    }

    private function atualizar(int $id, array $dados): void
    {
        $grupo = GrupoModel::findOrFail($id);

        $grupo->fill($dados);
        $grupo->save();
    }

    public function criar(array $dados): void
    {
        $dados['criado_por'] = \Auth::user()->id;

        GrupoModel::create($dados);
    }

    public function apagar(GrupoModel $grupo): void
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

    public function editar(GrupoModel $grupo): View
    {
        return view('grupos.cadastrar', ['grupo' => $grupo]);
    }
}
