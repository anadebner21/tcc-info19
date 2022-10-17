<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstoqueController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::post('/cadastrar-cliente', function(Request $dados){
    Cliente::create([
        'nome' => $dados->nome_cliente, 
        'cpf_cnpj' => $dados->cpf_cnpj_cliente, 
        'endereco' => $dados->endereco_cliente,
        'email' => $dados->email_cliente,
        'telefone' => $dados->telefone_cliente

    ]);
    echo "Cliente cadastrado com sucesso!";
    
});

Route::get('/mostrar-cliente/{id_do_cliente}', function ($id_do_cliente) {
    $cliente = Cliente::find($id_do_cliente);
    echo $cliente ->nome;
    echo "<br />";
    echo $cliente -> cpf_cnpj;
    echo "<br />";
    echo $cliente -> endereco;
    echo "<br />";
    echo $cliente -> email;
    echo "<br />";
    echo $cliente -> telefone;
    echo "<br />";

});

Route::get('/editar-cliente/{id_do_cliente}', function ($id_do_cliente) {
    $cliente = Cliente::findOrFail($id_do_cliente);
    return view('editar_cliente', ['cliente' => $cliente]);


});

Route::put('/atualizar-cliente/{id_do_cliente}', function (Request $dados, $id_do_cliente){
    $cliente = Cliente::findOrFail($id_do_cliente);
    $cliente-> nome = $dados->nome_cliente;
    $cliente-> cpf_cnpj = $dados->cpf_cnpj_cliente;
    $cliente-> endereco = $dados->endereco_cliente;
    $cliente-> email = $dados->email_cliente;
    $cliente-> telefone = $dados->telefone_cliente;
    $cliente->save();
    echo"Candidato atualizado com sucesso";
});

Route::put('/excluir-cliente/{id_do_cliente}', function ($id_do_cliente){
    $cliente = Cliente::findOrFail($id_do_cliente);
    $cliente ->delete();
    echo"Candidato DELETADO com sucesso";
});*/

Route:: resource("/cliente", ClienteController::class);


Route::resource('/estoques', EstoqueController::class);