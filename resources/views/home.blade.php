@extends('extensão.pagina')

@section('titulo' , 'Home')

@section('conteudo')

<div class="escolha">
    <a class="btn btn-primary home" href="{{ route('orcamento') }}" role="button">Orçamento</a>
    <a class="btn btn-primary home" href="{{ route('pesquisa') }}" role="button">Pesquisa Orçamento</a>
</div>

@endsection
