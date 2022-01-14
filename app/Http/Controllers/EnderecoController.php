<?php

namespace App\Http\Controllers;

use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller
{
    public function Index()
    {
       return view('Cadastros.Buscar');
    }

    public function Buscar(Request $request)
    {
        $cep = $request->input('cep');

       $response = Http::get("viacep.com.br/ws/$cep/json/")->json();
       return view('Cadastros.Adicionar')->with([
           'cep'=>$request->input('cep'),
           'rua' => $response['logradouro'],
           'bairro' => $response['bairro'],
           'cidade' => $response['localidade'],
           'estado' => $response['uf'],

       ]);
    }

    public function Salvar(SalvarRequest $request)
    {
        $endereco = new Endereco();
        $endereco->cep = $request ->cep;
        $endereco->rua = $request ->rua;
        $endereco->bairro = $request ->bairro;
        $endereco->cidade = $request ->cidade;
        $endereco->estado = $request ->estado;
        $endereco->save();
        return redirect('/');
    }


}
