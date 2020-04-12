@extends('layouts.app')

@section('content')
<div class="container spark-screen">
        <div class="form-group row">
            <div class="col-md-10 col-md-offset-1">
                    <div class="card-header">
                        Autores
                        <a class="float-right" href="{{url('autor/novo')}}">NOVO AUTOR</a>
                    </div>

                <div class="card-block">
                    <table class= "table">
                    @if(Session::has('mensagem_sucesso'))
                    <div class = "alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif
                    @if(Session::has('mensagem_aviso'))
                    <div class = "alert alert-warning">{{Session::get('mensagem_aviso')}}</div>
                    @endif
                        <th>Nome</th>
                        <th>Nacionalidade</th>
                        <th>Data de nascimento</th>
                        <th>Sexo</th>
                        <th>Ações</th>
                            <tbody>
                            @foreach($autor as $autor)
                                    <tr>
                                        <td>{{$autor->nome}}</td>
                                        <td>{{$autor->nacionalidade}}</td>
                                        <td>{{$autor->ano_nascimento}}</td>
                                        <td>{{$autor->sexo}}</td>
                                        <td>
                                        <a href="autor/{{$autor->id}}/edita" class="btn btn-secondary">Editar</a>
                                        {{ Form::open(['method'=>'DELETE','url' => 'autor/'.$autor->id, 'style'=>'display: inline;']) }}
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