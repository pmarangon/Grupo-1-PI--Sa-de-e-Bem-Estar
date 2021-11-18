@extends('layouts.principal')

@push('estilos')
<style type="text/css">
  .texto-slogan {
    place-self: center;
  }

  .carousel-item img {
    width: 85%;
  }
</style>
@endpush

@section('botoes')
<li class="nav-item m-1">
  <a class="btn btn-primary" href="{!! route('register') !!}">
    Cadastre-se
  </a>
</li>
<li class="nav-item m-1">
  <a class="btn btn-secondary" href="{!! route('login') !!}">
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

  <div class="row my-5">
    <div class="col-12 col-sm-6 col-md-8">
      <div class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('public/imagens/fotos/yoga.jpeg') }}" class="d-block mx-auto rounded-3">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('public/imagens/fotos/Boxe.jpg') }}" class="d-block mx-auto rounded-3">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('public/imagens/fotos/idosos.jpeg') }}" class="d-block mx-auto rounded-3">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('public/imagens/fotos/depois_do treino.jpg') }}" class="d-block mx-auto rounded-3">
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
      <div class="pt-4 pt-sm-0 px-4 px-sm-2">
        <span>
          {{-- A FAZER
            Trocar Lorem Ipsum por texto de introdução, também estudar uma fonte maior
          --}}
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat lacus at malesuada sodales. Donec bibendum sodales risus, et consequat mi suscipit sed. Mauris sed iaculis nibh. Ut sodales vestibulum sem. In hac habitasse platea dictumst. Nullam blandit maximus enim quis ultrices. Proin enim orci, molestie sed mauris eu, fringilla vulputate ante. Phasellus rhoncus pharetra auctor.
        </span>
      </div>
    </div>
  </div>

  <div class="my-5">
    <div class="d-grid">
      <h2 class="texto-slogan">
        {{-- A FAZER
          Trocar Lorem ipsum por Call to action
        --}}
        Lorem ipsum dolor sit amet
      </h2>
    </div>
    <div class="col-12 mt-3">
      <div class="col-12 col-sm-4 mx-auto">
        {{-- A FAZER
          Implementar links e rotas corretas após criar a parte de autenticação
        --}}
        <a class="btn btn-primary w-100" href="#">
          Cadastre-se
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
