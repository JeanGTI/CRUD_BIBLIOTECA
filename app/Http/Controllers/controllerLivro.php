<?php

namespace App\Http\Controllers;
use App\Livro;
use App\Genero;
use App\Editora;
use App\Autor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;


class controllerLivro extends Controller
{

    public function visualisa_Livro(){
        $livro = Livro::get();
        return view('list-livro',['livro'=> $livro]);
    }

    public function novo_Livro() {
        $autor = Autor::pluck('nome', 'id');
        $genero = Genero::pluck('nome', 'id');
        $editora = Editora::pluck('nome', 'id');

        return view('novo-Livro',compact('autor','genero','editora'));
    }
   
        public function salva_Livro(Request $request) {
            try{
                $livro = new Livro();
                $livro = $livro->create($request->all());
                \Session::flash('mensagem_sucesso','Livro cadastrado com sucesso!');
                return Redirect::to ('livro');
            }
            catch(QueryException $e){
                \Session::flash('mensagem_aviso','Por favor, preencha todos os campos!');
                return Redirect::to ('livro/novo');
            }
            
        }

        public function edita_Livro($id)
        {
            $livro = Livro::findOrFail($id);
            $autor = Autor::pluck('nome', 'id');
            $genero = Genero::pluck('nome', 'id');
            $editora = Editora::pluck('nome', 'id');
            return view ('novo-livro',compact('livro','autor','genero','editora'));
        }

        public function atualiza_Livro($id, Request $request)
        {
            try{
                $livro = Livro::findOrFail($id);
                $livro->update($request->all());
                \Session::flash('mensagem_sucesso','Livro atualizado com sucesso!');
                return Redirect::to ('livro/'.$livro->id.'/edita');
            }
            catch(QueryException $e){
                \Session::flash('mensagem_aviso','Por favor, preencha todos os campos!');
                return Redirect::to ('livro/'.$livro->id.'/edita');
            }
            
            

        }

        public function deleta_Livro($id, Request $request)
        {
            $livro = Livro::findOrFail($id);
            $livro->delete();
            \Session::flash('mensagem_sucesso','Livro excluido com sucesso!');
            return Redirect::to ('livro');

        }
    
}