@extends('estoque.layoutEstoque')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">ESTOQUE</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nome : {{ $estoque->nome }}</h5>
        <p class="card-text">Valor : {{ $estoque->valor }}</p>
        <p class="card-text">Quantidade : {{ $estoque->quantidade}}</p>
        <p class="card-text">OBS : {{ $estoque->obs}}</p>
        <p class="card-text">Status : {{ $estoque->status}}</p>

  </div>
    </hr>
  </div>
</div>