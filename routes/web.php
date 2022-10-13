<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-cliente', function(Request $dados){
    Cliente::create([
        'nome' => $dados->nome_cliente, 
        'cpf_cnpj' => $dados->cpf_cnpj_cliente, 
        'endereco' => $dados->endereco_cliente,
        'email' => $dados->email_cliente,
        'telefone' => $dados->telefone_cliente

    ]);
    echo "Cliente cadastrado com sucesso!";
    
});
