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
        <a href="/socios">
            <button type="submit" class="btn btn-primary" aria-label="Left Align">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Voltar
            </button>
        </a>
    @else

        {{dd($dadosDoClube)}}


        @foreach($dadosDoClube as $clube)
            <h1 align="center">{{$clube->nome}}</h1>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td>Sócios</td>
                </tr>
                <tr>
                    <td>{{$clube->socios->nome}}</td>
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
