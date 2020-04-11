<?php

namespace App\Http\Controllers;
use App\Editora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;


class controllerEditora extends Controller
{
    public function visualisa_Editora(){
        $editora = Editora::get();
        return view('list-editora',['editora'=> $editora]);
    }
    public function novo_Editora(){
        return view('novo-editora');
    }
        public function salva_Editora(Request $request) {
            $editora = new Editora();
            $editora = $editora->create($request->all());
            \Session::flash('mensagem_sucesso','Editora cadastrada com sucesso!');
            return view('novo-editora');
        }
        public function edita_Editora($id)
        {
            $editora = Editora::findOrFail($id);
            return view ('novo-editora',['editora' => $editora]);
        }

        public function atualiza_Editora($id, Request $request)
        {
            $editora = Editora::findOrFail($id);
            $editora->update($request->all());
            \Session::flash('mensagem_sucesso','Editora atualizada com sucesso!');
            return Redirect::to ('editora/'.$editora->id.'/edita');
            

        }

        public function deleta_Editora($id, Request $request)
        {
            try{
                $editora = Editora::findOrFail($id);
                $editora->delete();
                \Session::flash('mensagem_sucesso','Editora excluida com sucesso!');
                return Redirect::to ('editora');
            }
            catch(QueryException $e){
                \Session::flash('mensagem_aviso','Editora não pode ser excluido pois esta ligado a um Livro!');
                return Redirect::to ('editora');
            }
        }
}