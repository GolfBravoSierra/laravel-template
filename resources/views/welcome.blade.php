@extends('layouts.main')

@section('title', 'Xastre-IV')

@section('content')
<h1>Site Xastre-o-IV   <img src="/img/logo-puc.png" alt="Banner"></h1> 
@if($nome == "Giovani")
    <p>o nome {{ $nome }} ja está cadastrado ele gosta do filme: {{ $filme }}</p>
 @else
     <p>o nome {{ $nome }} não esta cadastrado</p>
@endif
<a href="/buscaprof">Professores</a>
<a href="/alunos">Alunos</a>
@endsection
