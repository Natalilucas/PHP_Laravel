@extends('layout.femaster')
@section('content')
 <h1>Olá, {{Auth::user()->name }}</h1>
 <h3>Tipo de Usuário: {{}}</h3>
@endsection
