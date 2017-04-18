@extends('template')

@section('title')
    Informações do Sócio
@endsection

@section('conteudo')

    @if(empty($dadosDoSocio))
        <div class="alert alert-danger">
            Sócio não encontrado.
        </div>
        <br>
        <br>
        <a href="/socios">
        <button type="submit" class="btn btn-primary" aria-label="Left Align">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Voltar
        </button>
        </a>
    @else

            @foreach($dadosDoSocio as $socio)
        <h1 align="center">Sócio {{$socio->nome}}</h1>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Sócio</td>
                <td>Clube</td>
            </tr>
            <tr>
                <td>{{$socio->nome}}</td>
                <td>
                    <a href="/clubes/show/{{$socio->clube->id}}">
                        <button type="submit" class="btn btn-info" aria-label="Left Align">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>{{$socio->clube->nome}}
                        </button>
                    </a>
                </td>
            </tr>
        </table>
        <br>
        <div class="button" align="center">
        <a href="/socios">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Voltar
            </button>
        </a>
        </div>
        @endforeach

    @endif

@endsection
