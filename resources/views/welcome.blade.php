@extends('layouts.main')

@section('title', 'Xastre-IV')

@section('content')
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
<a href="/alunos">Alunos</a>
@endsection
