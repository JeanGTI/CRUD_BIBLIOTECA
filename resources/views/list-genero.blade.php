@extends('layouts.app')

@section('content')
<div class="container spark-screen">
        <div class="form-group row">
            <div class="col-md-10 col-md-offset-1">
                    <div class="card-header">
                        Generos
                        <a class="btn btn-primary float-right" href="{{url('genero/novo')}}">NOVO GENERO</a>
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
                        <th>Ações</th>
                            <tbody>
                            @foreach($genero as $genero)
                                    <tr>
                                        <td>{{$genero->nome}}</td>
                                        <td>
                                        <a href="genero/{{$genero->id}}/edita" class="btn btn-secondary">Editar</a>
                                        {{ Form::open(['method'=>'DELETE','url' => 'genero/'.$genero->id, 'style'=>'display: inline;']) }}
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