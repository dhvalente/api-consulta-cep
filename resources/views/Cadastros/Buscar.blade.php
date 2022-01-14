
@extends('layout')
@section('cabecalho')
    Cadastro de Fornecedor
@endsection('cabecalho')
@section('conteudo')



    <form method="GET" div class="container mb-3" action="{{route('Buscar')}}">
        @csrf

        <div class="card mb-4 mt-4 ">

            <div class="card-body">
                <b> <font size="6">Cadastro de Fornecedores</font></b>
            </div>
        </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="CEP" name="cep" id="cep">
                <input class="btn btn-primary mt-2 btn-sm" type="submit" value="Buscar">
            </div>

        </div>

    </form>




@endsection('counteudo')

