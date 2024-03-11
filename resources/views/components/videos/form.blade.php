<main class="container">

    <form class="container__formulario" action="{{ $action }}" method="post">
        @csrf
        @if($update)
            @method('put')
        @endif
        <h2 class="formulario__titulo">{{ $title }}</h3>
            <div class="formulario__campo">
                <label class="campo__etiqueta" for="url">Link embed</label>
                <input name="url" class="campo__escrita" required
                    placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" id='url'
                    @isset($video) value="{{ $video->url }}" @endisset
                    />
            </div>


            <div class="formulario__campo">
                <label class="campo__etiqueta" for="titulo">Titulo do vídeo</label>
                <input name="descricao" class="campo__escrita" required placeholder="Neste campo, dê o nome do vídeo"
                    id='titulo' 
                    @isset($video) value="{{ $video->descricao }}" @endisset
                    />
            </div>

            <input class="formulario__botao" type="submit" value="Enviar" />
    </form>

</main>