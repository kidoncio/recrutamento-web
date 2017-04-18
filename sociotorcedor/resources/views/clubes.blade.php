@extends('template')

@section('title')
    Lista de Clubes
@endsection

@section('conteudo')

    @if(session('clubeDeletado'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" align="left">x</button>
            Clube {{session('clubeDeletado')}} deletado com sucesso.
            <br>
            <br>
        </div>
    @endif

    @if(session('clubeCadastrado'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" align="left">x</button>
        Clube {{session('clubeCadastrado')}} deletado com sucesso.
        <br>
        <br>
    </div>
    @endif

    @if(count($clubes) < 1)
        <div class="alert alert-danger" align="center">
            Você não tem nenhum clube cadastrado.

            <br>
            <br>

            <a href="/clubes/create">
                <button type="submit" class="btn btn-primary" aria-label="Left Align">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Clique aqui para Cadastrar
                </button>
            </a>
        </div>

    @else
        <h1 align="center">Clubes</h1>
        <table class="table table-striped table-bordered table-hover">

            @foreach ($clubes as $clube)
                <tr>
                <td>{{$clube->nome}}</td>
                    <td>
                        <a href="/clubes/{{$clube->id}}">
                            <button type="submit" class="btn btn-info" aria-label="Left Align">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>Informações
                            </button>
                        </a>
                    </td>
                <td>
                    <form action="/clubes" method="POST">

                        {{ method_field('DELETE') }}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{$clube->id}}">

                        <button type="submit" class="btn btn-danger" aria-label="Left Align">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Excluir
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
