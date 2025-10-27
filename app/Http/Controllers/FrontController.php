<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use App\Representant;
use App\Contact;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function orcamento()
    {
        return view('front.orcamento');
    }

    public function storeQuotation(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tipo_produto' => 'required|string',
            'empresa' => 'nullable|string|max:255',
            'quantidade' => 'nullable|string',
            'mensagem' => 'nullable|string',
        ]);

        Quotation::create([
            'nome' => $request->nome,
            'empresa' => $request->empresa,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'tipo_produto' => $request->tipo_produto,
            'quantidade' => $request->quantidade,
            'mensagem' => $request->mensagem,
        ]);

        return redirect()->route('front.orcamento')
            ->with('success', 'Sua solicitação de orçamento foi enviada com sucesso! Entraremos em contato em breve.');
    }

    public function representante()
    {
        return view('front.representante');
    }

    public function storeRepresentant(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
            'experiencia' => 'required|string',
            'disponibilidade' => 'required|string',
            'motivacao' => 'nullable|string',
        ]);

        Representant::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'experiencia' => $request->experiencia,
            'disponibilidade' => $request->disponibilidade,
            'motivacao' => $request->motivacao,
        ]);

        return redirect()->route('front.representante')
            ->with('success', 'Sua candidatura foi enviada com sucesso! Entraremos em contato em breve.');
    }

    public function sobre()
    {
        return view('front.sobre');
    }

    public function produtos()
    {
        return view('front.produtos');
    }

    public function contato()
    {
        return view('front.contato');
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cidade' => 'nullable|string|max:255',
            'assunto' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        Contact::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cidade' => $request->cidade,
            'assunto' => $request->assunto,
            'mensagem' => $request->mensagem,
        ]);

        return redirect()->route('front.contato')
            ->with('success', 'Sua mensagem foi enviada com sucesso! Entraremos em contato em breve.');
    }

    public function qualidade()
    {
        return view('front.qualidade');
    }
}
