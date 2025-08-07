@extends('template')

@section('title', 'Início')

@section('content')

<!-- Carrossel -->
<section class="carrossel-container">
    <div class="carrossel-slide">
        <div class="fundo">
            <img src="{{ asset('img/sala3.png') }}" class="carrossel-img"/>
            <div class="fundo-conteudo">
                <h2>Cinefilms, A melhor experiência de cinema!</h2>
            </div>
        </div>
    </div>
</section>

<!-- Produtos em Destaque -->
<section class="produtos">
    <h2>Próximos lançamentos</h2>
    <div class="grid-produtos">
        <div class="card">
            <img src="{{ asset('img/AvengersInfinita.jpg') }}" alt="Vingadores Guerra Infinita">
            <div class="filme-desc">
                <h3>Vingadores Guerra Infinita</h3>
                <p><b>12 • 2h 29m</b></p>
                <p><b>Elenco</b>: Robert Downey Jr (Homem de Ferro)...</p>
                <p><b>Gênero</b>: Ação/Ficção Científica</p>
                <button>Comprar Ingresso</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('img/avatar.jpg') }}" alt="Avatar 2">
            <div class="filme-desc">
                <h3>Avatar 2 Caminho da Água</h3>
                <p><b>14 • 3h 12m</b></p>
                <p><b>Elenco</b>: Sam Worthington (Jake Sully)...</p>
                <p><b>Gênero</b>: Ação/Ficção Científica</p>
                <button>Comprar Ingresso</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('img/como_treinar_seu_dragao.webp') }}" alt="Como Treinar o Seu Dragão">
            <div class="filme-desc">
                <h3>Como Treinar o Seu Dragão</h3>
                <p><b>10 • 2h 5m</b></p>
                <p><b>Elenco</b>: Mason Thames (Soluço)...</p>
                <p><b>Gênero</b>: Fantasia/Aventura</p>
                <button>Comprar Ingresso</button>
            </div>
        </div>
    </div>
</section>

<!-- Parceiros -->
<section class="parceiros">
    <h2>Nossos Parceiros</h2>
    <div class="logos-parceiros">
        <img src="{{ asset('img/Cinepolis.png') }}" alt="Cinépolis">
        <img src="{{ asset('img/cinemark.svg') }}" alt="Cinemark">
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carrosselSlide = document.querySelector('.carrossel-slide');
        const carrosselImgs = document.querySelectorAll('.carrossel-img');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');

        let counter = 0;
        let size = carrosselImgs[0].clientWidth;

        function updateSlide() {
            carrosselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        }

        nextBtn?.addEventListener('click', () => {
            counter++;
            if (counter >= carrosselImgs.length) {
                counter = 0;
            }
            updateSlide();
        });

        prevBtn?.addEventListener('click', () => {
            counter--;
            if (counter < 0) {
                counter = carrosselImgs.length - 1;
            }
            updateSlide();
        });

        window.addEventListener('resize', () => {
            size = carrosselImgs[0].clientWidth;
            carrosselSlide.style.transition = 'none';
            carrosselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
            setTimeout(() => {
                carrosselSlide.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        });
    });
</script>
@endsection
