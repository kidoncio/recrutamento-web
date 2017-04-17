@extends('template')

@section('title')
    Clube Deletado
@endsection

@section('conteudo')

    @if(empty($clube))
        <div class="alert alert-danger">
            ERROR - Nenhum clube foi deletado.
            <br>
            <a class="btn btn-danger" href="/clube" role="button">Voltar</a>
        </div>

    @else
        <div class="alert alert-success">
            Clube {{$clube}} foi deletado com sucesso.
            <br>
            <a class="btn btn-primary" href="/clube" role="button">Voltar</a>
        </div>
    @endif

@stop
