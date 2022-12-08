<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroDeOrcamento;
use DB;

class pesquisaController extends Controller
{
    public function pesquisa(){
        return view('novaPesquisa');
    }
    public function listaPesquisa(Request $request){

        $escolha = $request->get('escolha');




        if ($escolha == 1) {
            $orcamento = new CadastroDeOrcamento();
            $nomeClienete = $request->get('nome');
            $orcamentoss = $orcamento::where('vendedor', 'like' , "%$nomeClienete%")->get();

            return view('orcamentos', ['orcamentoss' => $orcamentoss] );

        }

        if ($escolha == 2) {
            $orcamento = new CadastroDeOrcamento();
            $nomeClienete = $request->get('nome');
            $orcamentoss = $orcamento::where('cliente', 'like' , "%$nomeClienete%")->get();

            return view('orcamentos', ['orcamentoss' => $orcamentoss] );

        }

        if ($escolha == 3) {
            $orcamento = new CadastroDeOrcamento();
            $dataOrcamento = $request->get('data');
            $orcamentoss = $orcamento::where('dataOrcamento', 'like' , "%$dataOrcamento%")->get();

            return view('orcamentos', ['orcamentoss' => $orcamentoss] );

        }


    }

    public function delete($id){
        $orcamento = CadastroDeOrcamento::where('id', $id)->firstorfail()->delete();
        echo ("Orcamento deleta com Sucesso");
        return redirect()->route('home');
    }

    public function edita( Request $request){
        $CadastroDeOrcamento = CadastroDeOrcamento::all();


        $id = $request->get('id');
        return view('orcamento_altera', ['CadastroDeOrcamento' => $CadastroDeOrcamento , 'id' => $id]);

    }

    public function update(Request $request){

        CadastroDeOrcamento::where('id', $request->id)->update(['cliente' => $request->cliente,'horaDoOrcamento' => $request->horaDoOrcamento,  'dataOrcamento' => $request->dataOrcamento, 'vendedor' => $request->vendedor, 'descricao' => $request->descricao, 'valorOrcado' => $request->valorOrcado]);

        return view('home');
    }

    public function abri(Request $request){
        $CadastroDeOrcamento = CadastroDeOrcamento::all();

        $id = $request->get('id');
        return view('edita', ['CadastroDeOrcamento' => $CadastroDeOrcamento , 'id' => $id]);

    }
}
