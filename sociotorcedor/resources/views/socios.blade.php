@extends('template')

@section('title')
    Lista de Sócios
    @endsection

@section('conteudo')

    @if(!empty(old('socioCadastrado->nome')))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" align="left">x</button>
            Sócio {{old('socioCadastrado->nome')}} foi cadastrado com sucesso.
            <br>
            <br>
        </div>
    @endif

    @if(!empty($socioDeletado))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" align="left">x</button>
            Sócio deletado com sucesso.
            <br>
            <br>
        </div>
    @endif

    @if(empty($socios))
        <div class="alert alert-danger">
            Você não tem nenhum sócio cadastrado.
        </div>
    @else
        <h1 align="center">Sócios</h1>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Sócio</td>
                <td>Clube</td>
                <td>Ações</td>
            </tr>
            @foreach ($socios as $socio)
                <tr>
                    <td>{{$socio->nome}}</td>
                    @foreach($clubes as $clube)
                    @if($clube->id == $socio->clube_id)
                    <td>{{$clube->nome}}</td>
                    @endif
                    @endforeach
                    <td>
                        <form action="/socio" method="POST">

                            {{ method_field('DELETE') }}

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$socio->id}}">

                            <button type="submit" class="btn btn-danger" aria-label="Left Align">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Excluir
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

@endsection
