@push('estilos')
<style type="text/css">
    .fas.fa-trash:hover {
        color: #dc3545 !important;
    }
</style>
@endpush

<div class="col-12 col-sm-6 col-md-4" id="card-grupo-{!! $grupo->id !!}">
    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title">
                {!! $grupo->nome !!}

                @if(\Auth::user()->administrador())
                <a href="#" class="text-secondary float-end" onClick="apagarGrupo('{!! $grupo->id !!}')">
                    <i class="fas fa-trash"></i>
                </a>
                @endif
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                {!! ucfirst($grupo->cidade) !!} - {!! $grupo->esporte !!}
            </h6>

            @if(! is_null($grupo->descricao))
            <p class="card-text">
                {!! $grupo->descricao !!}
            </p>
            @endif

            <button type="button" class="btn btn-primary" onClick="entrarGrupo('{!! $grupo->id !!}')">
                Entrar
            </button>
      </div>
    </div>
</div>

@once
    @push('scripts')
    <script type="text/javascript">
        function entrarGrupo(grupoId) {
            const url = `{!! route('grupos-entrar', '') !!}/${grupoId}`

            axios.get(url)
                .catch(erro => {
                    alert('Não foi possivel entrar no grupo. Por favor entre em contato com a equipe técnica.')

                    console.error(erro);
                })
                .then(resposta => {
                    const linkGrupo = resposta.data

                    window.location = linkGrupo;
                });
        }

        function apagarGrupo(grupoId) {
            const url = `{!! route('grupos-apagar', '') !!}/${grupoId}`

            axios.delete(url)
                .catch(erro => {
                    alert('Não foi possível apagar o grupo!')

                    console.error(erro);
                })
                .then(_ => {
                    alert('Grupo apagado com sucesso!')

                    const card = document.getElementById(`card-grupo-${grupoId}`)

                    card.remove();
                });
        }
    </script>
    @endpush
@endonce
