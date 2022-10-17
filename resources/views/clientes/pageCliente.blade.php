@extends('clientes.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>CLIENTES</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/cliente/create') }}" class="btn btn-sucess btn-sm" title="Add Novo Cliente">
                            Add Novo
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>CPF/CNPF</th>
                                        <th>Endereço</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($clientes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->cpf_cnpj }}</td>
                                        <td>{{ $item->endereco }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->telefone }}</td>


  
                                        <td>
                                            <a href="{{ url('/cliente/' . $item->id) }}" title="Ver Cliente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/cliente/' . $item->id . '/edit') }}" title="Editar Cliente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
  
                                            <form method="POST" action="{{ url('/cliente' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Deletando Cliente" onclick= "return confirm ('Você deseja excluir?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
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