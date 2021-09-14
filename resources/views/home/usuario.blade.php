@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Listagem de Usuários</h3>
        </div>
        <div class="col-md-8">
        <a href="/usuarios/novo" class="btn btn-primary">Incluir usuário</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>Idade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuarios)
                <tr>
                    <td>{{ $usuarios->nome }}</td>
                    <td>{{ $usuarios->rg }}</td>
                    <td>{{ $usuarios->idade }}</td>
                    <td>
                        <ul class="list-inline">
                            <li>
                                <a href="/usuarios/alterar/{{$usuarios->id}}">Editar</a>
                            </li>
                            <li>
                                <a href="/usuarios/excluir/{{$usuarios->id}}">Deletar</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection