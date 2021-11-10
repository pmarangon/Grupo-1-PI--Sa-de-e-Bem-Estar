<div class="col-12 col-sm-6 col-md-4">
    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title">
                {!! $grupo->nome !!}
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                {!! ucfirst($grupo->cidade) !!} - {!! $grupo->esporte !!}
            </h6>

            @if(! is_null($grupo->descricao))
            <p class="card-text">
                {!! $grupo->descricao !!}
            </p>
            @endif

            <button href="{!! $grupo->link !!}" class="btn btn-primary">
                Entrar
            </button>
      </div>
    </div>
</div>
