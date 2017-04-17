@extends('template')

@section('title')
    Lista de Clubes
@endsection

@section('conteudo')
    @if(!empty(old('clubeExcluido')))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" align="left">x</button>
            Clube {{old('clubeExcluido')}} foi deletado com sucesso.
            <br>
            <br>
        </div>
    @endif
    @if(empty($clubes))
        <div class="alert alert-danger">
            Você não tem nenhum clube cadastrado.
        </div>

    @else
        <h1 align="center">Clubes</h1>
        <table class="table table-striped table-bordered table-hover">
            @foreach ($clubes as $clube)
                <tr>
                <td>{{$clube->nome}}</td>
                <td>
                    <form action="/clube" method="POST">

                        {{ method_field('DELETE') }}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{$clube->id}}">

                        <button type="submit" class="btn btn-danger" aria-label="Left Align">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Excluir
                    </button>

                    </form>
                </td>
                </tr>
            @endforeach
        </table>
    @endif


    <script>
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
    </script>

@stop
