@extends('template')

@section('title')
    Cadastro de Clube
@endsection

@section('conteudo')

    @if(empty($clube))
        <div class="alert alert-danger">
            ERROR - Nenhum clube foi cadastrado.
            <br>
            <a class="btn btn-danger" href="/clube/create" role="button">Voltar</a>
        </div>

    @else
        <div class="alert alert-success">
            Clube {{$clube}} foi cadastrado com sucesso.
            <br>
            <a class="btn btn-primary" href="/clube" role="button">Voltar</a>
        </div>
    @endif

@stop
