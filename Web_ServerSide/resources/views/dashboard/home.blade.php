@extends('layout.femaster')
@section('content')

<h1>Olá, {{ Auth::user()->name }}</h1>
@if (Auth::user()->user_type == 1)
    <div class="alert alert-success">
    Bem vindo Admin
    </div>
@endif
<h3>Tipo de Usuário: {{ Auth::user()->user_type }}</h3>
@endsection
