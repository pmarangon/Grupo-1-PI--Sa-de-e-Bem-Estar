@extends('layouts.principal')

@push('estilos')
<style type="text/css">
    span.text-muted {
        font-size: 0.75rem !important;
    }
</style>
@endpush

@section('botoes')
<h2 class="text-secondary">
    Cadastrar grupo
<h2>
@endsection

@section('conteudo')
<div>
    <form class="my-5 form-control" method="POST" action="{!! route('grupos-salvar') !!}">
        @csrf

        <input type="hidden" name="id"
            value="{!! isset($grupo) ? $grupo->id : '' !!}"
        >

        <div class="form-group my-3">
            <label class="form-label" for="nome">
                Nome do grupo
            </label>
            <input class="input-control d-block w-100" type="text" id="nome" name="nome"
                value="{!! isset($grupo) ? $grupo->nome : '' !!}" required
            >
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="membros_maximo">
                Número máximo de membros no grupo
            </label>
            <input class="input-control d-block w-100" type="number" id="membros_maximo" name="membros_maximo"
                value="{!! isset($grupo) ? $grupo->membros_maximo : 255 !!}" required
            >
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="esporte">
                Esportes do grupo <span class="text-muted">(separar com virgulas caso houver mais de um)</span>
            </label>
            <input class="input-control d-block w-100" type="text" id="esporte" name="esporte"
                value="{!! isset($grupo) ? $grupo->esporte : '' !!}" required
            >
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="cidade">
                Cidades do grupo <span class="text-muted">(separar com virgulas caso houver mais de um)</span>
            </label>
            <input class="input-control d-block w-100" type="text" id="cidade" name="cidade"
                value="{!! isset($grupo) ? $grupo->cidade : '' !!}" required
            >
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="link">
                Link do grupo
            </label>
            <input class="input-control d-block w-100" type="url" id="link" name="link"
                value="{!! isset($grupo) ? $grupo->link : '' !!}" required
            >
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="descricao">
                Descrição do grupo
            </label>
            <textarea class="input-control d- block w-100" id="descricao" name="descricao">{!! isset($grupo) ? $grupo->descricao : '' !!}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">
            Salvar
        </button>
    </form>
</div>
@endsection
