@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Novo Usuário</h3>
        <form method="post" >
            {{ csrf_field() }}
            <div>
                <label for="nome">Nome do Usuário</label>
                <input type="text" id="nome" name="nome" value="{{ $usuario->nome }}">
            </div>
            <div>
                <label for="rg">RG do Usuário</label>
                <input type="text" id="rg" name="rg" value="{{ $usuario->rg }}">
            </div>
            <div>
                <label for="idade">Idade do Usuário</label>
                <input type="number" id="idade" name="idade" value="{{ $usuario->idade }}">
            </div>
            <div class="form-group">
                <input type="submit" name="save_eqp" value="Salvar usuário">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
        </form>
    </div>
</div>
@endsection