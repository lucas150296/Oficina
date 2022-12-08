@extends('extensão.pagina')

@section('titulo', 'Lista de orçamentos')

@section('conteudo')

    <table>
        <tr>
            <td>ID</td>
            <td>Nome Cliente</td>
            <td>Nome Vendedor</td>
            <td>Data do Orçamento</td>
            <td>Excluir</td>
            <td>Edita</td>
            <td>Abri</td>
        </tr>
        @foreach ($orcamentoss as $key => $orcamentoss)
            <tr>
                <td>{{ $orcamentoss->id }}</td>
                <td>{{ $orcamentoss->cliente }} </td>
                <td>{{ $orcamentoss->vendedor }}</td>
                <td>{{ $orcamentoss->dataOrcamento}}</td>
                <td><a href=""onclick="event.preventDefault(); document.getElementById('delete-form-{{ $orcamentoss->id }}').submit();">Excluir</a>
                </td>
                <td><a href="{{ route('edita', ['id' => $orcamentoss->id]) }}">Edita</a></td>
                <td><a href="{{ route('abri', ['id' => $orcamentoss->id ]) }}">Abri</a></td>
                <form id="delete-form-{{$orcamentoss->id}}"
                    + action="{{route('orcamento.delete', $orcamentoss->id)}}"
                    method="post">
                  @csrf @method('DELETE')
              </form>
            </tr>
        @endforeach
        </tr>
    </table>


@endsection
