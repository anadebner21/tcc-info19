@extends('clientes.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Criar Novo Cliente</div>
  <div class="card-body">
       
      <form action="{{ url('cliente') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="nome" id="nome" class="form-control"></br>
        <label>CPF/CNPJ</label></br>
        <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control"></br>
        <label>Endereço</label></br>
        <input type="text" name="endereco" id="endereco" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Telefone</label></br>
        <input type="text" name="telefone" id="telefone" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop