@extends('template')

@section('title')
    Cadastro de Clubes
@endsection

@section('conteudo')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-center">Cadastrar Clubes</h3>
        </div>

        <div class="panel-body" align="center">
            <form action="/clubes" method="post" class="form-horizontal">

                <fieldset>
                    <div class="form-group">
                        <label for="clube" class="col-sm-2 control-label">Nome do Clube</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nome" name="nome"/>
                        </div>
                    </div>
                </fieldset>

                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <button type="submit" class="btn btn-primary">Cadastrar</button>

                <a class="btn btn-sm btn-default" href="/clubes">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
