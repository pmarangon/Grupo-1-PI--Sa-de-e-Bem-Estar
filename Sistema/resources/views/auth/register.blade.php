@extends('layouts.principal')

@push('estilos')
<style type="text/css">
    h2.text-muted {
        font-size: 0.95rem !important;
    }

    span.text-muted {
        font-size: 0.75rem !important;
    }
</style>
@endpush

@section('botoes')
<h2 class="text-secondary">
    Cadastro
<h2>
@endsection

@section('conteudo')
<div>
    <form class="my-5 form-control" method="POST" action="{!! route('register') !!}">
        @csrf

        <section>
            <h3>
                Dados de acesso
           </h3>
           <h2 class="text-muted">
                Esses são os dados que você usará para acessar e se identificar na plataforma
            </h2>

            <div class="form-group my-3">
                <label class="form-label" for="name">
                    Nome
                </label>
                <input class="input-control d-block w-100" type="text" id="name" name="name" required>
            </div>

            <div class="form-group my-3">
                <label class="form-label" for="email">
                    E-Mail
                </label>
                <input class="input-control d-block w-100" type="email" id="email" name="email" required>
            </div>

            <div class="form-group my-3">
                <label class="form-label" for="password">
                    Senha
                </label>
                <input class="input-control d-block w-100" type="password" id="password" name="password" required>
            </div>

            <div class="form-group my-3">
                <label class="form-label" for="password_confirmation">
                    Confirmar Senha
                </label>
                <input class="input-control d-block w-100" type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
        </section>

        <button class="btn btn-primary" type="submit">
            Cadastrar
        </button>
    </form>
</div>
@endsection
