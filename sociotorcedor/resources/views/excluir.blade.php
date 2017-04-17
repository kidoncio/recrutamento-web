@extends('template')

@section('title')
    Remover Sócio
@endsection

@section('conteudo')

    @if(empty($id))
        <div class="alert alert-danger">
            ERROR - Nenhum sócio foi selecionado para ser removido.
            <br>
            <a class="btn btn-danger" href="/socios" role="button">Voltar</a>
        </div>

    @else
        <div class="alert alert-success">
            Sócio {{$id}} removido com sucesso.
            <br>
            <a class="btn btn-primary" href="/socios" role="button">Voltar</a>
        </div>
    @endif

@stop
