@extends('layout.femaster')

@section('content')

<div class="container">
    <h2>Adicionar tarefas</h2>
    <br>
    <form action="POST" action="{{route('tasks.create')}}">
        @csrf
        <div class="mb-4">
            <label for="" class="form-label">Nome da Tarefa</label>
            <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Nome" required>
            @error('name')
            <div class="alert alert-danger">
                Tarefa inválida
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="" class="form-label"> User ID</label>
            <select name="user_id" id="">
                @foreach ($users as $user )
                <option value="{{$user->id}}">
                    {{$user->name}}
                </option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-primary">
            ENVIAR
        </button>

    </form>
    <br>
    <br>
    <a href="{{route('home.index')}}">
        VOLTAR
    </a>
    <br>
    <br>
</div>
@endsection
