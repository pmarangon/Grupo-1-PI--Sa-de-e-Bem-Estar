@extends('layouts.principal')

@section('botoes')
<li class="nav-item m-1">
    <a class="btn btn-primary rounded-pill fw-bold" href="{!! route('register') !!}">
        Cadastre-se
    </a>
</li>
<li class="nav-item m-1">
    <a class="btn btn-secondary rounded-pill" href="{!! route('login') !!}">
        Login
    </a>
</li>
@endsection

@section('conteudo')
<div>
    <div class="d-grid">
	<h1 class="texto-slogan">
            SportZap, sua saúde é melhor com lazer
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
		<span class="fs-4">
                    Os esportes coletivos são muito importantes, visto que fomos obrigados a se afastar de tudo e todos, para nossa segurança durante a pandemia de Covid-19, assim já não dá mais para ficar, não é? Junte-se a equipe do SportZap e melhore suas amizades, seus momentos de lazer e sua saúde. SportZap te ajuda a encontrar pessoas próximas de você com horários condizentes ao seu e com o mesmo interesse em esportes, quer mais? Não tem custo nenhum e você se conectará com todos por uma plataforma que já conhece, o WhatsApp.
                </span>
            </div>
        </div>
    </div>

    <div class="my-5">
        <div class="d-grid txt-align-center">
	    <h3 class="texto-slogan">
		Melhor que isso não tem, junte-se agora mesmo ao SportZap!
	    </h3>
            <h4 class="texto-slogan">
                Sua saúde em conjunto com o lazer!
            </h4>
        </div>
        <div class="col-12 mt-3">
          <div class="col-12 col-sm-4 mx-auto">
                <a class="btn btn-primary w-100 rounded-pill" href="{!! route('register') !!}">
                    <span class="fs-3 fw-bold">
                        Cadastre-se
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
