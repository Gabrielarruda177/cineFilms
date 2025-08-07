<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Loja')</title>
    <script src="{{ asset('js/carrossel.js') }}"></script>

    <!-- CSS local -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

     @yield('head')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (ícones de carrinho e usuário) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-bdPjeF7O3pckYpFZa5VlE2R9OwMgiGvKQQfnrH/2+2Jh5p+zKpc3rTNN+ItzXn+vZypqVjovT+QmtB5fAoAdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo-container">
                <a href="{{ url('/') }}">
                     <img class="logo" src="{{('img/cinefilms2.png')}}">
                </a>
            </div>

            <ul class="menu">
                <li><a href="{{ url('/') }}">Início</a></li>
                <li><a href="{{ url('/filmes') }}">Filmes</a></li>
                <li><a href="{{ url('/sobre') }}">Bomboniére</a></li>
                <li><a href="{{ url('/contato') }}">Serviços</a></li>
                <li><a href="{{ url('/quem-somos') }}">Quem Somos</a></li>
                <li><a href="{{ url('/Login') }}">Login</li>
            </ul>

           

            <div class="header-icons">
                <a href="{{ url('/carrinho') }}" title="Carrinho de Compras">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <a href="{{ url('/login') }}" title="Minha Conta">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </nav>
    </header>

    <main class="main-content">
        @yield('content')

        <script src="{{ asset('js/fadein.js') }}"></script>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const faders = document.querySelectorAll('.quem-somos');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
                });
            }, {
                threshold: 0.1
            });

            faders.forEach(el => observer.observe(el));
            });

        </script>

         <script>
            document.addEventListener("DOMContentLoaded", function () {
            const faders = document.querySelectorAll('.carrossel-container');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
                });
            }, {
                threshold: 0.1
            });

            faders.forEach(el => observer.observe(el));
            });

        </script>

        <script>
             const dias = document.querySelectorAll('.day');
            const filmes = document.querySelectorAll('.filme');

            dias.forEach(dia => {
            dia.addEventListener('click', () => {
                // Muda o dia selecionado
                dias.forEach(d => d.classList.remove('selected'));
                dia.classList.add('selected');

                const diaSelecionado = dia.getAttribute('data-dia');

                // Mostra apenas os filmes do dia clicado
                filmes.forEach(filme => {
                filme.style.display = filme.getAttribute('data-dia') === diaSelecionado ? 'flex' : 'none';
                });
            });
            });

            // Mostrar inicialmente os filmes do primeiro dia
            const primeiroDia = document.querySelector('.day.selected').getAttribute('data-dia');
            filmes.forEach(filme => {
            filme.style.display = filme.getAttribute('data-dia') === primeiroDia ? 'flex' : 'none';
            });
        </script>


        @yield('scripts')
    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Cinefilms. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
