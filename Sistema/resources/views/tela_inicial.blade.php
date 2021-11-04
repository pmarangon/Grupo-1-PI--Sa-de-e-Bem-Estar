@extends('layouts.principal')

@push('estilos')
<style type="text/css">
  .texto-slogan {
    place-self: center;
  }
</style>
@endpush

@section('botoes')
{{-- A FAZER
  Implementar links e rotas corretas após criar a parte de autenticação
--}}
<li class="nav-item">
  <a class="btn btn-primary" href="#">
    Cadastre-se
  </a>
</li>
<li class="nav-item">
  <a class="btn btn-secondary" href="#">
    Login
  </a>
</li>
@endsection

@section('conteudo')
<div>
  <div class="d-grid">
    <h1 class="texto-slogan">
      {{-- A FAZER
        Trocar Lorem ipsum por slogan
      --}}
      Lorem ipsum dolor sit amet
    </h1>
  </div>
  <div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      {{-- A FAZER
        Adicionar imagens no carrossel
      --}}
      <div class="carousel-item active">
        <img src="..." class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100">
      </div>
    </div>
  </div>
  {{-- A FAZER
    Adicionar:
    - Seção de introdução ao sistema
    - Seção com Call To Action
    - Rodapé
  --}}
</div>
@endsection
