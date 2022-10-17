@extends('estoque.layoutEstoque')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>ESTOQUE</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/estoques/create') }}" class="btn btn-success btn-sm" title="Add Materiais">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Valor</th>
                                        <th>Quantidade</th>
                                        <th>Obs</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($estoque as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->valor }}</td>
                                        <td>{{ $item->quantidade }}</td>
                                        <td>{{ $item->obs }}</td>
                                        <td>{{ $item->status}}</td>
                                        <td>
                                            <a href="{{ url('/estoques/' . $item->id) }}" title="Ver Materiais"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/estoques/' . $item->id . '/edit') }}" title="Editar Estoque"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
  
                                            <form method="POST" action="{{ url('/estoques' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Deletar Material" onclick="return confirm('Confirmar exclusão?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
