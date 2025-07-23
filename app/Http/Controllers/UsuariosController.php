<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
     public function __construct(User $user){
        $this->user = $user;
    }

    public function index(Request $request){
        $pesquisar = $request->pesquisar;
        $findUser = $this->user->getFiltrosPaginate(search: $pesquisar ?? "");

        return view('pages.usuarios.index', compact('findUser'));
    }

    public function delete($idUser){
        $buscaRegistro = User::find($idUser);
        $buscaRegistro-> delete();
        

        return back();

    }
}
