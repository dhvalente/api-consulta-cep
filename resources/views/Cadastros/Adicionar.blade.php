
@extends('layout')
@section('cabecalho')
    Cadastro de Fornecedor
@endsection('cabecalho')
@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf

    <form method="POST" div class="container mb-3" action="{{route('Salvar')}}">
        @csrf

        <div class="card mb-4 mt-4 ">

            <div class="card-body">
                <b> <font size="6">Cadastro de Fornecedores</font></b>
            </div>
        </div>


        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Rua" name="rua" id="rua" value="{{$rua}}">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Número" name="numeroRua" id="numeroRua">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Bairro" name="bairro" id="bairro" value="{{$bairro}}">
            </div>
        </div>

        <div class="form-row mb-2">
            <div class="col-7">
                <input type="text" class="form-control" placeholder="Cidade" name="cidade" id="cidade" value="{{$cidade}}">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Estado" name="estado" id="estado" value="{{$estado}}">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="CEP" name="cep" id="cep" value="{{$cep}}">

            </div>
        </div>
        <input class="btn btn-primary mt-2 btn-sm" type="submit" value="Buscar">
    </form>




@endsection('counteudo')

