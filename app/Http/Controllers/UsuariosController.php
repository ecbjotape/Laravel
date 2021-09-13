<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    
     
     
    public function getUser()
    {
        $usuarios = Usuario::all();
        return view('home.usuario', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create', ['action'=>route('registrar'), 'method'=>'post']);
    }
   
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('home'));
    if (! $request->has('cancel') ){
        $dados = $request->all();
        Usuario::create($dados);
        $request->session()->flash('message', 'Usuário cadastrado com sucesso');
    }
    else
    { 
        $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
    }
    return redirect()->to($url);
    }
  
    public function edit($rg)
    {
        $usuario = Usuario::findOrfail($rg);
        return view('usuarios.update', [ 'usuario' => $usuario,  'action'=>route('alterar'), 'method'=>'post']);
    }

    public function update(Request $request, $rg)
    {
        $url = $request->get('redirect_to', route('home'));
        $usuario = Usuario::findOrfail($rg);
        $usuario->update([
            'nome' => $request->nome,
            'rg' => $request->rg,
            'idade' => $request->idade,
        ]);
        $request->session()->flash('message', 'Usuário atualizado com sucesso');
        return redirect()->to($url);
    }

    public function delete($id)
    {
        //
    }
}
