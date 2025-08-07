@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form method="POST" action="{{ url('/admin/cadastro') }}">
    @csrf
    <input type="text" name="name" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Senha" required>
    <input type="password" name="password_confirmation" placeholder="Confirme a senha" required>
    <button type="submit">Cadastrar</button>
</form>
