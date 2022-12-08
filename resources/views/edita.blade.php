@extends('extensão.pagina')

@section('titulo', 'Lista de orçamentos')

@section('conteudo')

<form action="{{ route('edita') }}" method="post">

    @foreach ($CadastroDeOrcamento as $key => $CadastroDeOrcamento)

            @if ($CadastroDeOrcamento->id == $id)
            <div class="row">

                <div class="mb col">
                    <label class="form-label">Digite nome do Vendedor(a)</label>
                    <input type="text" name="vendedor" value="{{ $CadastroDeOrcamento->vendedor }}" class="form-control"
                        placeholder="Nome Vendedor(a)">
                </div>

            </div>

            <div class="row">

                <div class="mb col">
                    <label class="form-label">Digite nome do cliente</label>
                    <input type="text" name="cliente" value="{{ $CadastroDeOrcamento->cliente }}" class="form-control" placeholder="Nome cliente">

                </div>
                <div class="mb col">
                    <label class="form-label">Data do Orçamento</label>
                    <input name="dataOrcamento" value="{{ $CadastroDeOrcamento->dataOrcamento }}" type="date" class="form-control">
                </div>
                <div class="mb col">
                    <label class="form-label">hora do Orçamento</label>
                    <input name="horaDoOrcamento" value="{{ $CadastroDeOrcamento->horaDoOrcamento }}" type="time" class="form-control">
                </div>
            </div>

            <div class="row">
                <label class="form-label">Descrição </label>
                <textarea name="descricao"  class="form-control">{{$CadastroDeOrcamento->descricao}}</textarea>
            </div>

            <div class="row">
                <label class="form-label">Valor do Orçamento </label>

                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" name="valorOrcado" value="{{$CadastroDeOrcamento->valorOrcado}}" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>

                </div>

                <div><input type="text" name="id" value="{{$id}}" hidden ></div>

            </div>
            @endif
            @endforeach
</form>
@endsection
