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
    <form class="my-5 form-control" method="POST" action="{!! route('grupos-criar') !!}">
        @csrf

        <div class="form-group my-3">
            <label class="form-label" for="nome">
                Nome do grupo
            </label>
            <input class="input-control d-block w-100" type="text" id="nome" name="nome"    required>
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="membros_maximo">
                Número máximo de membros no grupo
            </label>
            <input class="input-control d-block w-100" type="number" value="255" id="membros_maximo" name="membros_maximo"    required>
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="esporte">
                Esportes do grupo <span class="text-muted">(separar com virgulas caso houver mais de um)</span>
            </label>
            <input class="input-control d-block w-100" type="text" id="esporte" name="esporte"  required>
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="cidade">
                Cidades do grupo <span class="text-muted">(separar com virgulas caso houver mais de um)</span>
            </label>
            <input class="input-control d-block w-100" type="text" id="cidade" name="cidade"    required>
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="link">
                Link do grupo
            </label>
            <input class="input-control d-block w-100" type="url" id="link" name="link"    required>
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="descricao">
                Descrição do grupo
            </label>
            <textarea class="input-control d- block w-100" id="descricao" name="descricao"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">
            Salvar
        </button>
    </form>
</div>
@endsection
