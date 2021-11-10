@extends('layouts.principal')

@section('botoes')
@if (\Auth::user()->administrador())
<li class="nav-item m-1">
  <a class="btn btn-primary" href="{!! route('register') !!}">
    Cadastrar grupos
  </a>
</li>
@endif
@endsection

@section('conteudo')
<div>

</div>
@endsection
