<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Xastre IV</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js" ></script>

    </head>
    <body>
        <h1>Site Xastre-o-IV   <img src="/img/logo-puc.png" alt="Banner"></h1>
        @if(10 > 15)
            <p>condição V</p>
        @else
            <p>condição F</p>
        @endif
        

        @if($nome == "Giovani")
            <p>o nome {{ $nome }} ja está cadastrado ele gosta do filme: {{ $filme }}</p>
        @else
            <p>o nome {{ $nome }} não esta cadastrado</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 3)
            <p>esse aluno ja foi cadastrado </p>
            @endif
        @endfor
        <p>{{ $nome }}</p>
        <a href="/buscaprof">Professores</a>
    </body>
</html>
