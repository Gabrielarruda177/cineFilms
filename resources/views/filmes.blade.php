@extends ('template')

@section('title', 'Filmes')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/filmes.css') }}">
@endsection

@section('content')
    <!-- Carrossel -->
  
   <section class="carrossel-container">
    <div class="carrossel-slide">
        <div class="fundo">
            <img src="{{ asset('img/sala.jpg') }}" class="carrossel-img"/>
            <div class="fundo-conteudo">
                <h2>Cinefilms!</h2>
                <p>A melhor experiência de cinema.</p>
            </div>
        </div>
    </div>
</section>


  

  <!-- Dias da Semana -->
  <div class="week-selector">
    <h2>Programação</h2>
    <div class="day selected" data-dia="dom">DOM.<br>3</div>
    <div class="day" data-dia="seg">SEG.<br>4</div>
    <div class="day" data-dia="ter">TER.<br>5</div>
    <div class="day" data-dia="qua">QUA.<br>6</div>
    <div class="day" data-dia="qui">QUI.<br>7</div>
    <div class="day" data-dia="sex">SEX.<br>8</div>
    <div class="day" data-dia="sab">SÁB.<br>9</div>
    <div type="date" class="mes">MÊS<br>📅</div>
  </div>

  <!-- Lista de Filmes -->
  <div class="filmes-lista">
    <!-- Filme - DOM -->
    <div class="filme" data-dia="dom">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    
     <div class="filme" data-dia="dom">
      <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>


    <div class="filme" data-dia="dom">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <!-- Filme - SEG -->
    <div class="filme" data-dia="seg">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>
    
     <div class="filme" data-dia="seg">
      <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <div class="filme" data-dia="seg">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <!-- Filme - TER -->
    <div class="filme" data-dia="ter">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>
    
     <div class="filme" data-dia="ter">
      <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <div class="filme" data-dia="ter">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <!-- Filme - QUA -->
    <div class="filme" data-dia="qua">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>
    
     <div class="filme" data-dia="qua">
      <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <div class="filme" data-dia="qua">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <!-- Filme - QUI -->
    <div class="filme" data-dia="qui">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>
    
     <div class="filme" data-dia="qui">
      <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <div class="filme" data-dia="qui">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <!-- Filme - SEX -->
    <div class="filme" data-dia="sex">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>
    
     <div class="filme" data-dia="sex">
      <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <div class="filme" data-dia="sex">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <!-- Filme - SAB -->
    <div class="filme" data-dia="sab">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>
    
     <div class="filme" data-dia="sab">
      <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>

    <div class="filme" data-dia="sab">
       <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Tênis 3">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 •  2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
    </div>
  </div>
@endsection
