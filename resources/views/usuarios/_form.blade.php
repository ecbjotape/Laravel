@extends('layouts.app')

<form action= "{{ route('registrar') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
        <label for="nome">Nome do Usuário</label>
        <input type="text" id="nome" name="nome">
    </div>
    <div>
        <label for="rg">RG do Usuário</label>
        <input type="text" id="rg" name="rg">
    </div>
    <div>
        <label for="idade">Idade do Usuário</label>
        <input type="number" id="idade" name="idade">
    </div>