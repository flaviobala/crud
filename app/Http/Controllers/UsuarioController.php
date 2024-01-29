<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestUsuario;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user; 
    }
     public function index (Request $request)
    {
        $pesquisar = $request->Pesquisar;
        $findUsuario = $this->user->getUsuariosPesquisarIndex(search: $pesquisar ?? '');
        
        return view('pages.usuario.paginacao',compact('findUsuario'));
    }
     public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = User::find($id);
        $buscaRegistro->delete();
        return response()->json(['success' => true]);
    }
    public function cadastrarUsuario(FormRequestUsuario $request)
    {
        if($request->method() == "POST"){
           
            //criar produtos
           
          $data = $request->all();
          $data['password'] = Hash::make($data['password']);
         
          User::create($data);
          Toastr::success('Gravado com sucesso');
          return redirect()->route('usuario.index');
        }
        return view('pages.usuario.create');
    }

    public function atualizarUsuario(FormRequestUsuario $request, $id)
    { 
        if($request->method() == "PUT"){
         
         $data = $request->all();
         $data['password'] = Hash::make($data['password']);
         $buscaRegistro = User::find($id);
         $buscaRegistro->update($data);
         Toastr::success('Dados atualizados com sucesso.');
         return redirect()->route('usuario.index');
        }
        $findUsuario = User::where('id', '=',$id)->first();
       
        return view('pages.usuario.atualiza', compact('findUsuario'));
    }
}
