@extends('clientes.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">MAIS INFOMAÇÕES CLIENTE</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nome : {{ $clientes->nome }}</h5>
        <p class="card-text">CPF/CNPJ : {{ $clientes->cpf_cnpj}}</p>
        <p class="card-text">Endereço : {{ $clientes->endereco}}</p>
        <p class="card-text">Email : {{ $clientes->email}}</p>
        <p class="card-text">Telefone : {{ $clientes->telefone}}</p>


  </div>
    </hr>
  </div>
</div>