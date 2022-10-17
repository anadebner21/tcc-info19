@extends('estoque.layoutEstoque')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Editar Materiais</div>
  <div class="card-body">
       
  <form action="{{ url('estoques/' .$estoque->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$estoque->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="nome" id="nome" value="{{$estoque->nome}}" class="form-control"></br>
        <label>Valor</label></br>
        <input type="text" name="valor" id="valor" value="{{$estoque->valor}}" class="form-control"></br>
        <label>Quantidade</label></br>
        <input type="text" name="quantidade" id="quantidade" value="{{$estoque->quantidade}}" class="form-control"></br>
        <label>OBS</label></br>
        <input type="text" name="obs" id="obs" value="{{$estoque->obs}}" class="form-control"></br> 
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$estoque->status}}" class="form-control"></br>
        <input type="submit" value="Editar" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop