@extends('extensão.pagina')

@section('titulo', 'pesquisa')

@section('conteudo')

    <form action="{{ route('pesquisa') }}" method="post">

        <div>
            <label for="" class="form-label">escolha a identificação </label>
            <select class="form-control" name="escolha" id="escolha" required onchange="habilitaEscolha()">
                <option value="">Escolha</option>
                <option value="1">Nome vendedor</option>
                <option value="2">Nome cliente</option>
                <option value="3">Data do Orçamento</option>
            </select>
        </div>

        <div class="mb-3" id="nome" class="escola">
            <label for="formGroupExampleInput" class="form-label">Digite o Nome do cliente ou vendedor</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Example input placeholder">
        </div>

        <div id="data" class="escola">
            <label for="formGroupExampleInput" class="form-label">Digite a data do orçamento</label>
            <input type="date" name="data" class="form-control" >
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 25px">Enviar</button>
        @csrf
    </form>

@endsection
