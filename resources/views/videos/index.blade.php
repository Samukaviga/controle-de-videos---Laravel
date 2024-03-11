<x-layout title="Videos" >

   @isset($mensagemSucesso)
    <div class="mensagemSucesso-div">
        <div class="mensagemSucesso" >
            {{ $mensagemSucesso }}
        </div>
    </div>
    @endisset

<ul class="videos__container" alt="videos alura">

    @foreach ($videos as $video)
    <li class="videos__item">
        <iframe width="100%" height="72%" src="{{ $video->url }}"
                title="Voltando ao mercado após a maternidade: Ana Silvério" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        <div class="descricao-video">
            <img src="./img/logo.png" alt="logo canal alura">
            <h3>{{ $video->descricao }}</h3>
            <div class="acoes-video">
                <a href="/videos/{{ $video->id }}/editar">Editar</a>
                
                <form action="/videos/{{ $video->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Excluir</button>
                </form>
            </div>
        </div>
    </li>
    @endforeach
</ul>
</x-layout>