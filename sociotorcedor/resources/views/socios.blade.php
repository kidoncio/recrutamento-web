@extends('template')

@section('title')
    Lista de Sócios
    @endsection

@section('conteudo')

    @if((session('socioCadastrado')))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" align="left">x</button>
            Sócio {{session('socioCadastrado')}} cadastrado com sucesso.
                <br>
            <br>
        </div>
    @endif

    @if(session('socioDeletado'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" align="left">x</button>
            Sócio {{session('socioDeletado')}} deletado com sucesso.
            <br>
            <br>
        </div>
    @endif

    @if(count($socios) < 1)
        <div class="alert alert-danger">
            Você não tem nenhum sócio cadastrado.
        </div>
    @else

        <h1 align="center">Sócios</h1>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Sócio</td>
                <td>Clube</td>
                <td>Informações</td>
                <td>Ações</td>
            </tr>
            @foreach ($socios as $socio)
                <tr>
                    <td>{{$socio->nome}}</td>
                    <td>{{$socio->clube->nome}}</td>
                    <td>
                        <a href="/socios/show/{{$socio->id}}">
                            <button type="submit" class="btn btn-info" aria-label="Left Align">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>Informações
                            </button>
                        </a>
                    </td>
                    <td>
                        <form action="/socios" method="POST">

                            {{ method_field('DELETE') }}

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$socio->id}}">

                            <button type="submit" class="btn btn-danger" aria-label="Left Align">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Excluir
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    @endif

@endsection
