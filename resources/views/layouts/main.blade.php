<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!--fonte-->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Roboto" rel="stylesheet"> 
       <!--Bootstrap-->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js" ></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                    <img src="/img/logo-puc.png" alt="Site-Xastre-IV">
                    </a>
                    <ul class="navbar-nav">
                       <li class="nav-item">
                            <a href="/" class="nav-link">CASA</a>
                        </li> 
                        <li class="nav-item">
                            <a href="/buscaprof" class="nav-link">PROFESSORES</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">MATÉRIAS</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="/alunos" class="nav-link">ALUNOS</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>Site-Xastre-IV</p>
        </footer>
    </body>
</html>
