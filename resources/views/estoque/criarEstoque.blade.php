@extends('estoque.layoutEstoque')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">ADICIONAR NOVO MATERIAL</div>
  <div class="card-body">
       
      <form action="{{ url('estoques') }}" method="post">
        {!! csrf_field() !!}
        <label>Nome</label></br>
        <input type="text" name="nome" id="nome" class="form-control"></br>
        <label>Valor</label></br>
        <input type="text" name="valor" id="valor" class="form-control"></br>
        <label>Quantidade</label></br>
        <input type="text" name="quantidade" id="quantidade" class="form-control"></br>
        <label>OBS</label></br>
        <input type="text" name="obs" id="obs" class="form-control"></br> 
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Salvar" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop