<?php

use Illuminate\Support\Facades\Route;

// Importa os controllers
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aqui você registra todas as rotas da sua aplicação.
| Essas rotas são carregadas pelo RouteServiceProvider e atribuídas ao grupo "web".
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/filmes', function () {
    return view('filmes');
});

Route::get('/quem-somos', function () {
    return view('quem-somos');
});


Route::get('/contato', [ContatoController::class, 'create']);

Route::post('/contato', [ContatoController::class, 'index']);


