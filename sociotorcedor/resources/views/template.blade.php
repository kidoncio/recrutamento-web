<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       @yield('title') | Sócio Torcedor
    </title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/custom.css">
    <link rel="stylesheet" href="/app.css">
    @yield('extraCss')
</head>

<body>
<div class="container">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" align="left">x</button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('msg'))
        <div class="alert alert-success">
            <p>{{session('msg')}}</p>
        </div>
    @endif

    @yield('conteudo')
        <div class="links" align="center">
            </br>
            <a href="/">Home</a>
            <a href="/socios/create">Cadastrar Sócio</a>
            <a href="/socios">Lista de Sócios</a>
            <a href="/clubes/create">Cadastrar Clube</a>
            <a href="/clubes">Lista de Clubes</a>
        </div>
</div>


<script src="/js/app.js"></script>
<script src="/jquery/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
@yield('extraJs')
</body>
</html>