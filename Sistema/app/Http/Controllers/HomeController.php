<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo as GrupoModel;

class HomeController extends Controller
{
    public function index()
    {
        $grupos = GrupoModel::obtemGruposParaUsuario(\Auth::user());

        return view('home', [
            'grupos' => $grupos,
        ]);
    }
}
