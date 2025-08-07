@extends('template')



@if($errors->any())
    <p>{{ $errors->first() }}</p>
@endif

<form method="POST" action="{{ url('/admin/login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email do Admin" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>

@endsection