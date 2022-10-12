<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
