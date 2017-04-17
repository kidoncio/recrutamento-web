@extends('template')

@section('title')
    Sócio Deletado
@endsection

@section('conteudo')

    @if(empty($socio))
        <div class="alert alert-danger">
            ERROR - Nenhum clube foi deletado.
            <br>
            <a class="btn btn-danger" href="/socio" role="button">Voltar</a>
        </div>

    @else
        <div class="alert alert-success">
            Sócio {{$socio}} deletado com sucesso.
            <br>
            <a class="btn btn-primary" href="/socio" role="button">Voltar</a>
        </div>
    @endif

@stop
