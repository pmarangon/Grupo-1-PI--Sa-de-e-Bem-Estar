@extends('layouts.principal')

@section('botoes')
@if (\Auth::user()->administrador())
<li class="nav-item m-1">
  <a class="btn btn-primary" href="{!! route('grupos-cadastrar') !!}">
    Cadastrar grupos
  </a>
</li>
@endif
@endsection

@section('conteudo')
<div class="my-5">
  <div class="row">
    @foreach($grupos as $grupo)
    @include('grupos.componentes.card', [
      'grupo' => $grupo,
    ])
    @endforeach
  </div>
</div>
@endsection
