<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;  // Corrigido o namespace aqui

class ContatoController extends Controller
{
    public function create()
    {
        return view('contato');
    }

    public function index(Request $dadosContato)
    {
        $dadosContato->validate([
            'nome' => 'required',
            'email'=> 'required|email',
            'mensagem' => 'required'
        ]);

        Contato::create($dadosContato->all()); // Corrigido o nome da classe aqui

        return redirect('/contato')->with('success', 'Mensagem enviada com sucesso!');
    }
}
