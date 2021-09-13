@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Novo Usuário</h3>
        @include('usuarios._form')
        <div class="form-group">
            <input type="submit" name="save_eqp" value="Salvar usuário">
            <input type="submit" name="cancel" value="Cancelar">
        </div>
    </div>
    </form>
</div>
@endsection