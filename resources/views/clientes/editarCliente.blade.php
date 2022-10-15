@extends('clientes.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Editar Cliente</div>
  <div class="card-body">
       
      <form action="{{ url('cliente/' .$clientes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$clientes->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="nome" id="nome" value="{{$clientes->nome}}" class="form-control"></br>
        <label>CPF/CNPF</label></br>
        <input type="text" name="cpf_cnpj" id="cpf_cnpj" value="{{$clientes->cpf_cnpj}}" class="form-control"></br>
        <label>Endereço</label></br>
        <input type="text" name="endereco" id="endereco" value="{{$clientes->endereco}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$clientes->email}}" class="form-control"></br>
        <label>Telefone</label></br>
        <input type="text" name="telefone" id="telefone" value="{{$clientes->telefone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop