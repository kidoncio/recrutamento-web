@extends('template')

@section('title')
    Cadastro de Clubes
@endsection

@section('conteudo')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-center">Cadastrar Sócio</h3>
        </div>

        <div class="panel-body" align="center">
            <form action="/socio" method="post" class="form-horizontal">

                <fieldset>
                    <div class="container">
                        <div class="form-group">
                            <label for="nome" class="col-form-label">Nome do Sócio</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nome" name="nome" value="{{$socio->nome or old('nome')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="clube" class="col-form-label">Clube</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="clube" name="clube">
                                @foreach($clubes as $clube)
                                    <option value="{{$clube->id}}">{{$clube->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">
                    Cadastrar
                </button>

                <a class="btn btn-sm btn-default" href="/socio/create">Cancelar</a>
            </form>
        </div>
    </div>
@stop
