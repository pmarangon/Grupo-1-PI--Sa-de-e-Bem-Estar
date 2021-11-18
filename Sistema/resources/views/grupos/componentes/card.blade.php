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
                @if($grupo->cheio())
                <span class="text-danger">
                    {!! $grupo->nome !!} - CHEIO
                </span>
                @else
                <span>
                    {!! $grupo->nome !!}
                </span>
                @endif

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

            @if(! $grupo->cheio())
            <button type="button" class="btn btn-primary col-12" onClick="entrarGrupo('{!! $grupo->id !!}')">
                Entrar
            </button>
            @endif
      </div>
    </div>
</div>

@once
    @push('scripts')
    <script type="text/javascript">
        function entrarGrupo(grupoId) {
            const url = `{!! route('grupos-entrar', '') !!}/${grupoId}`

            axios.get(url)
                .then(resposta => {
                    const linkGrupo = resposta.data

                    window.location = linkGrupo;
                })
                .catch(erro => {
                    const dadosErro = erro.response.data
                    const mensagemErro = dadosErro.mensagem

                    alert(mensagemErro)
                });
        }

        function apagarGrupo(grupoId) {
            const url = `{!! route('grupos-apagar', '') !!}/${grupoId}`

            axios.delete(url)
                .then(_ => {
                    alert('Grupo apagado com sucesso!')

                    const card = document.getElementById(`card-grupo-${grupoId}`)

                    card.remove();
                })
                .catch(erro => {
                    alert('Não foi possível apagar o grupo!')

                    console.error(erro);
                });
        }
    </script>
    @endpush
@endonce
