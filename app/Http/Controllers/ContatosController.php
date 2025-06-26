<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatos;
use App\Http\Requests\FormRequestContatos;

class ContatosController extends Controller
{
    public function __construct(Contatos $contatos){
        $this->contato = $contatos;
    }

    public function index(Request $request){
        $pesquisar = $request->pesquisar;
        $findContatos = $this->contato->getFiltrosPaginate(search: $pesquisar ?? "");

        return view('pages.contatos.index', compact('findContatos'));
    }

    public function delete($idUser){
        $buscaRegistro = Contatos::find($idUser);
        $buscaRegistro-> delete();
        

        return back();

    }

    public function create(FormRequestContatos $request){
         //Retornando a view de criação de contatos
        if ($request->method() == "POST") {
            $data = $request->all();
            Contatos::create($data);
            return redirect('/contatos');
        }
        return view('pages.contatos.create');
    
    }

    public function update(FormRequestContatos $request, $idContatos){
        if($request->method() == 'PUT'){
            $data = $request-> all();
            $buscaRegistro = Contatos::find($idContatos);
            $buscaRegistro->update($data);

            return redirect('/contatos');

        }

        $findContatos = Contatos::where('id', '=', $idContatos)->first();

        return view('pages.contatos.update', compact('findContatos'));
    }

}
