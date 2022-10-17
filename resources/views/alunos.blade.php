@extends('layouts.main')

@section('title', 'Alunos')

@section('content')

    @if($busca != '')
    <p>os resultados para {{ $busca }} são eses:</p>
    @else
    <h1>essa é a pagina de alunos</h1>
    @endif
    
@endsection