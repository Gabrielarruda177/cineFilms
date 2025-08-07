@extends ('template')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/quem-somos.css') }}">
@endsection

@section('content')

   <!-- Carrossel -->
  
   <section class="carrossel-container">
        <div class="carrossel-slide">
            <div class="fundo">
                <img src="{{ asset('img/sala.jpg') }}" class="carrossel-img"/>
                <div class="fundo-conteudo">
                    <h2>Descubra novas emoções e viva o cinema como nunca antes no CineFilms!</h2>
                </div>
            </div>
        </div>
    </section>

<!-- Quem Somos -->

 <div class="quem-somos">
    <div class="icone">🍿</div>
    <h2>Bem-vindo à Cinefilms!</h2>
    <p>
        Aqui você encontra os lançamentos mais esperados do cinema, estreias exclusivas e seus filmes favoritos em cartaz! 
        Explore nossa programação completa, assista trailers e garanta seu ingresso com poucos cliques — tudo de forma rápida, 
        segura e sem filas. <br><br>
        Escolha seu filme, selecione o melhor horário e prepare-se para viver a experiência CineFlix! 
        Compre agora e aproveite a magia do cinema com conforto e praticidade.
    </p>
</div>


@endsection