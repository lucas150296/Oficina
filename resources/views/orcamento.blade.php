@extends('extensão.pagina')

@section('titulo', 'Orçamento')

@section('conteudo')

    <form action="{{ route('orcamento') }}" method="post">

        <div class="row">
            <h3 class="from">Bem Vindo a Tela de Orçamento</h3>
            <div class="mb col">
                <label class="form-label">Digite nome do Vendedor(a)</label>
                <input type="text" name="vendedor" value="{{ old('vendedor') }}" class="form-control"
                    placeholder="Nome Vendedor(a)">
                    {{ $errors->has('vendedor') ? $errors->first('vendedor') : '' }}
            </div>

        </div>

        <div class="row">

            <div class="mb col">
                <label class="form-label">Digite nome do cliente</label>
                <input type="text" name="cliente" value="{{ old('cliente') }}" class="form-control" placeholder="Nome cliente">
                {{ $errors->has('cliente') ? $errors->first('cliente') : '' }}
            </div>
            <div class="mb col">
                <label class="form-label">Data do Orçamento</label>
                <input name="dataOrcamento" value="{{ old('dataOrcamento') }}" type="date" class="form-control">
                {{ $errors->has('dataOrcamento') ? $errors->first('dataOrcamento') : '' }}
            </div>
            <div class="mb col">
                <label class="form-label">hora do Orçamento</label>
                <input name="horaDoOrcamento" value="{{ old('horaDoOrcamento') }}" type="time" class="form-control">
                {{ $errors->has('horaDoOrcamento') ? $errors->first('horaDoOrcamento') : '' }}
            </div>
        </div>

        <div class="row">
            <label class="form-label">Descrição </label>
            <textarea name="descricao"  class="form-control">{{ (old('descricao') != '') ? old('descricao') : 'Preencha aqui a sua mensagem' }}</textarea>
            {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
        </div>

        <div class="row">
            <label class="form-label">Valor do Orçamento </label>

            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" name="valorOrcado" value="{{ old('valorOrcado') }}" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
                {{ $errors->has('valorOrcado') ? $errors->first('valorOrcado') : '' }}
            </div>

        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 25px">Enviar</button>
        @csrf
    </form>

@endsection
