@extends('layout.femaster')
@section('content')
<h1>Cucu, ver um user</h1>

<h4>Nome: {{ $myUser->name }}</h4>
<h4>Phone: {{ $myUser->phone }}</h4>
<h4>Address: {{ $myUser->address }}</h4>
<h4>Email:{{ $myUser->email }}</h4>

<div>
    Atualizar os dados: {{ $myUser->name }}
<form method="POST" action="{{route('users.update')}}">
    @csrf
    <input type="hidden" name="id" value="{{$myUser->id}} id=""">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input  name="name" value="{{$myUser->name}}" class="form-control" id="exampleFormControlInput1" placeholder="Nome" required>
      </div>
      @error('name')
      <div class="alert alert-danger">
          Por favor coloque um nome válido
      </div>

      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input disabled type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleFormControlInput1" placeholder="email@exemplo.com" required>
        @error('email')
        <div class="invalid-feedback">
            Por favor coloque um email válido

        </div>

        @enderror
      </div>
    </div>
      <button type="submit" class="btn btn-primary">ATUALIZAR</button>
</form>

@endsection
