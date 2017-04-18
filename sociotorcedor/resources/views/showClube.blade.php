@extends('template')

@section('title')
    Informações do Clube
@endsection

@section('conteudo')

    @if(empty($dadosDoClube))
        <div class="alert alert-danger">
            Clube não encontrado.
        </div>
        <br>
        <br>
        <a href="/clubes">
            <button type="submit" class="btn btn-primary" aria-label="Left Align">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Voltar
            </button>
        </a>
    @else


        @foreach($dadosDoClube as $clube)
            <h1 align="center">{{$clube->nome}}</h1>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td align="center"><h4>Sócios</h4></td>
                    <td align="center"><h4>Ações</h4></td>
                </tr>
                @foreach($clube->socios as $socio)
                <tr>
                    <td>{{$socio->nome}}</td>
                    <td>
                        <a href="/socios/{{$socio->id}}">
                            <button type="submit" class="btn btn-info" aria-label="Left Align">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>Informações
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
            <br>
            <div class="button" align="center">
                <a href="/clubes">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Voltar
                    </button>
                </a>
            </div>
        @endforeach

    @endif

@endsection
