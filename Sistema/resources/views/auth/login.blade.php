@extends('layouts.principal')

@section('botoes')
<h2 class="text-secondary">
    Login
<h2>
@endsection

@section('conteudo')
<div class="col-12 col-md-6 mx-auto">
    <form class="my-5 form-control" method="POST" action="{!! route('login') !!}">
        @csrf

        <div class="form-group my-3">
            <label class="form-label" for="email">
                E-Mail
            </label>
            <input class="input-control d-block w-100" type="email" id="email" name="email" required autofocus>
        </div>

        <div class="form-group my-3">
            <label class="form-label" for="password">
                Senha
            </label>
            <input class="input-control d-block w-100" type="password" id="password" name="password" required>
        </div>

        <button class="btn btn-primary d-block mx-auto rounded-pill" type="submit">
            Entrar
        </button>
    </form>
</div>
@endsection
