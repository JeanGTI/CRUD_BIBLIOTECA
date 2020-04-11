<?php

namespace App\Http\Controllers;
use App\Genero;
use App\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;

class controllerGenero extends Controller
{

    public function visualisa_Genero(){
        $genero = Genero::get();
        return view('list-genero',['genero'=> $genero]);
    }

    public function novo_Genero(){
        return view('novo-genero');
    }
        public function salva_Genero(Request $request) {
            $genero = new Genero();
            $genero = $genero->create($request->all());
            \Session::flash('mensagem_sucesso','Genero cadastrado com sucesso!');
            return view('novo-genero');
        }
        public function edita_Genero($id)
        {
            $genero = Genero::findOrFail($id);
            return view ('novo-genero',['genero' => $genero]);
        }

        public function atualiza_Genero($id, Request $request)
        {
            $genero = Genero::findOrFail($id);
            $genero->update($request->all());
            \Session::flash('mensagem_sucesso','Genero atualizado com sucesso!');
            return Redirect::to ('genero/'.$genero->id.'/edita');
            

        }

        public function deleta_Genero($id, Request $request)
        {
            try{
                $genero = Genero::findOrFail($id);
                $genero->delete();
                \Session::flash('mensagem_sucesso','Genero excluido com sucesso!');
                return Redirect::to ('genero');
                } catch(QueryException $e) {
                    \Session::flash('mensagem_aviso','Genero não pode ser excluido pois esta ligado a um Livro!');
                    return Redirect::to ('genero');

            }

        }

}