@extends('layouts.app')

@section('content')
<div class="container spark-screen">
        <div class="form-group row">
            <div class="col-md-10 col-md-offset-1">
                    <div class="card-header">
                        Livros
                        <a class="btn btn-primary float-right" href="{{url('livro/novo')}}">NOVO LIVRO</a>
                    </div>

                <div class="card-block">
                    <table class= "table">
                    @if(Session::has('mensagem_sucesso'))
                    <div class = "alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif
                    @if(Session::has('mensagem_aviso'))
                    <div class = "alert alert-warning">{{Session::get('mensagem_aviso')}}</div>
                    @endif
                        <th>Titulo</th>
                        <th>Ano de lançamento</th>
                        <th>Autor</th>
                        <th>Genero</th>
                        <th>Editora</th>
                        <th>Ações</th>
                            <tbody>
                            @foreach($livro as $livro)
                                    <tr>
                            @foreach($livro -> autor as $autor)
                            @foreach($livro -> editora as $editora)
                            @foreach($livro -> genero as $genero)
                                        <td>{{$livro->titulo}}</td>
                                        <td>{{$livro->ano_lancamento}}</td>  
                                        <td>{{$autor -> nome}}</td> 
                                        <td>{{$genero -> nome}}</td>
                                        <td>{{$editora -> nome }}</td>                  
                                           
                            @endforeach   
                            @endforeach 
                            @endforeach                           
                                        
                                        <td>
                                        <a href="livro/{{$livro->id}}/edita" class="btn btn-secondary">Editar</a>
                                        {{ Form::open(['method'=>'DELETE','url' => 'livro/'.$livro->id, 'style'=>'display: inline;']) }}
                                        <button type="submit" class="btn btn-secondary" >Excluir</button>
                                        {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection