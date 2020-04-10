<?php

namespace App\Http\Controllers;
use App\Autor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class controllerAutor extends Controller
{
    public function visualisa_Autor(){
        $autor = Autor::get();
        return view('list-autor',['autor'=> $autor]);
    }
    public function novo_Autor(){
        return view('novo-autor');
    }
        public function salva_Autor(Request $request) {
            $autor = new Autor();
            $autor = $autor->create($request->all());
            \Session::flash('mensagem_sucesso','Autor cadastrado com sucesso!');
            return view('novo-autor');
        }
        public function edita_Autor($id)
        {
            $autor = Autor::findOrFail($id);
            return view ('novo-autor',['autor' => $autor]);
        }

        public function atualiza_Autor($id, Request $request)
        {
            $autor = Autor::findOrFail($id);
            $autor->update($request->all());
            \Session::flash('mensagem_sucesso','Autor atualizado com sucesso!');
            return Redirect::to ('autores/'.$autor->id.'/editar');
            

        }

        public function deleta_Autor($id, Request $request)
        {
            $autor = Autore::findOrFail($id);
            $autor->delete();
            \Session::flash('mensagem_sucesso','Autor excluido com sucesso!');
            return Redirect::to ('autores');

        }
}
