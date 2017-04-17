@extends('template')

@section('title')
    Cadastro de Sócio
@endsection

@section('conteudo')

    @if(empty($nome))
        <div class="alert alert-danger">
            ERROR - Nenhum sócio foi cadastrado.
            <br>
            <a class="btn btn-danger" href="/clube/create" role="button">Voltar</a>
        </div>

    @else
        <div class="alert alert-success">
            Sócio cadastrado com sucesso.
            <br>
            <a class="btn btn-primary" href="/clube" role="button">Voltar</a>
        </div>
    @endif

@stop
