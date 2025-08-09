@extends('template')

@section('head')
<link rel="stylesheet" href="{{ asset('css/quem-somos.css') }}">
@endsection

@section('content')

<!-- Banner com imagem -->
<section class="banner">
  <div class="banner-img" style="background-image: url('{{ asset('img/sala.jpg') }}')">
    <div class="banner-content">
      <h2>Descubra novas emoções e viva o cinema como nunca antes no CineFilms!</h2>
    </div>
  </div>
</section>

<!-- Quem Somos -->
<section class="quem-somos">
  <h2>Bem-vindo à CineFilms!</h2>
  <p>
    Somos uma plataforma dedicada à paixão pelo cinema! Nossa missão é tornar sua experiência única, confortável e envolvente, desde a escolha do filme até o último segundo da sessão.
  </p>
</section>

<!-- Missão Visão Valores -->
<section class="valores">
  <div class="box">
    <h3>🎯 Missão</h3>
    <p>Oferecer uma experiência cinematográfica moderna, prática e acessível para todos os públicos.</p>
  </div>
  <div class="box">
    <h3>👁️ Visão</h3>
    <p>Ser referência nacional em inovação e tecnologia para agendamentos de sessões de cinema.</p>
  </div>
  <div class="box">
    <h3>💙 Valores</h3>
    <p>Compromisso, respeito ao cliente, inovação, ética e paixão pelo cinema.</p>
  </div>
</section>

<!-- Equipe Desenvolvedora -->
<section class="equipe">
  <h2>Nossa Equipe</h2>
  <div class="cards">
    <div class="card">
      <img src="{{ asset('img/esse.jpg') }}" alt="Gabriel Arruda">
      <h3>Gabriel Arruda</h3>
      <p>Full Stack </p>
    </div>
    <div class="card">
      <img src="{{ asset('img/kaua.png') }}" alt="João Silva">
      <h3>Kauã Amorim</h3>
      <p>Front-End</p>
    </div>
    <div class="card">
      <img src="{{ asset('img/lukas.png') }}" alt="Maria Oliveira">
      <h3>Lucas</h3>
      <p>Back-End</p>
    </div>
  </div>
</section>

@endsection