<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroDeOrcamento;

class orcamentoController extends Controller
{
    public function index(){
        return view('orcamento');
    }

    public function salvaOrcamento(Request $request){

        $regras = [
            'vendedor' => 'required|min:3|max:40',
            'cliente' => 'required|min:3|max:40',
            'dataOrcamento' => 'required',
            'horaDoOrcamento' => 'required',
            'descricao' => 'required|max:2000',
            'valorOrcado'=>'required'
        ];

        $feedback = [
            'cliente.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'cliente.max' => 'O campo nome deve ter no máximo 40 caracteres',

            'vendedor.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'vendedor.max' => 'O campo nome deve ter no máximo 40 caracteres',

            'descricao.max' => 'A mensagem deve ter no máximo 2000 caracteres',

            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);


        CadastroDeOrcamento::create($request->all());
        return redirect()->route('home');

    }
}
