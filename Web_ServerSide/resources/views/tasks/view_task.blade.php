@extends('layout.femaster')
@section('content')
<h1>Cucu, ver uma task</h1>

<h4>Pasword: {{ $myTask->name }}</h4>
<h4>Phone: {{ $myTask->description }}</h4>

<!--<h4>Pasword: {{ $myTask->status }}</h4>
<h4>Pasword: {{ $myTask->updated_at }}</h4>
<h4>Pasword: {{ $myTask->user_id }}</h4>
<h4>Email:{{ $myTask->id }}</h4>
<h4>Nome: {{ $myTask->created_at }}</h4>
<h4>Address: {{ $myTask->due_at }}</h4>-->

<div>
    Atualizar os dados: {{ $myTask->status }}
<form method="POST" action="{{route('tasks.update')}}">
    @csrf
    <input type="hidden" name="id" value="{{$myTask->id}} id=""">
    <div class="mb-3 w-2 ">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input  name="name" value="{{$myTask->name}}" class="form-control" id="exampleFormControlInput1" placeholder="Nome" required>
      </div>
      @error('name')
      <div class="alert alert-danger">
         O nome da tarefa é inválido
      </div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descrição</label>
        <input type="descricao" name="descricao" value="{{$myTask->description)}}" class="form-control" id="exampleFormControlInput1" required>
        @error('descricao')
        <div class="invalid-feedback">
            Descrição inválida
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <select name="user_id" id="">
            <option value="" selected> Seleccione um User</option>
            @foreach ($users as $user)
                <option @if ($user->id == $myTask->user_id) selected @endif value="{{ $user->id }}">
                    {{ $user->name }} </option>
            @endforeach
        </select>

      </div>
    </div>
      <button type="submit" class="btn btn-primary">ATUALIZAR</button>
</form>

@endsection
