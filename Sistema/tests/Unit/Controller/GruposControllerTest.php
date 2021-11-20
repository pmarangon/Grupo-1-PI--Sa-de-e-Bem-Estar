<?php

namespace Tests\Unit;

use App\Http\Controllers\GruposController;
use App\Models\Grupo as GrupoModel;
use App\Models\User as UsuarioModel;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mockery;
use Tests\TestCase;

class GruposControllerTest extends TestCase
{
    use DatabaseTransactions,
        WithFaker;

    public function testSalvarGrupoSemIdDeveCriarNovoGrupo(): void
    {
        $qtdeGruposOriginal = GrupoModel::all()->count();

        $this->be(UsuarioModel::first());

        $controller = new GruposController();
        $controller->salvar($this->request());

        $qtdeGrupos = GrupoModel::all()->count();

        $this->assertNotEquals($qtdeGruposOriginal, $qtdeGrupos);
    }

    public function testSalvarGrupoComIdNaoDeveCriarNovoGrupo(): void
    {
        $qtdeGruposOriginal = GrupoModel::all()->count();

        $this->be(UsuarioModel::first());

        $controller = new GruposController();
        $controller->salvar($this->requestComId());

        $qtdeGrupos = GrupoModel::all()->count();

        $this->assertEquals($qtdeGruposOriginal, $qtdeGrupos);
    }

    private function request(): Request
    {
        $request = new Request();

        $request->merge([
            'nome' => 'foo',
            'esporte' => 'bar',
            'cidade' => 'foobar',
            'descricao' => 'barfoo',
            'link' => 'foo',
            'membros_atual' => 0,
            'membros_maximo' => 255,
        ]);

        return $request;
    }

    private function requestComId(): Request
    {
        $request = $this->request();

        $request->merge([
            'id' => GrupoModel::first()->id,
        ]);

        return $request;
    }
}
