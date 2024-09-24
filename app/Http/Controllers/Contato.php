<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class Contato extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Criar um novo contato e salvar no banco
        Contact::create($validated);

        // Redirecionar com mensagem de sucesso
        return redirect()->route('contact')->with('success', 'Mensagem enviada com sucesso!');
    }
}
