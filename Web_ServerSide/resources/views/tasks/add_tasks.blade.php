@extends('layout.femaster')

@section('content')

<div class="container">
    <h2>Adicionar tarefas</h2>
    <br>
    <form method="POST" action="{{route('tasks.create')}}">
        @csrf
        <div class="mb-4">
            <label for="" class="form-label">Nome da Tarefa</label>
            <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="name" required>
            @error('name')
            <div class="alert alert-danger">
                Tarefa inválida
            </div>
            @enderror
        </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">User ID</label>
                </div>
                <select name="user_id" class="custom-select" id="inputGroupSelect01" required>
                    @foreach ($users as $user )
                    <option @if ($user->id == request()->query('user_id')) selected @endif value="{{$user->id}}">
                        {{$user->name}}
                    </option>
                    @endforeach
                </select>
                @error('user_id')
                <div class="alert alert-danger"> Selecione um utilizador </div>
                @enderror


        </div>

        <button type="submit" class="btn btn-primary">
            ENVIAR
        </button>

    </form>
    <br>
    <br>
    <a class="btn btn-success" href="{{ route('home.index') }}">Voltar</a>
    <br>
    <br>
</div>
@endsection
