@extends('layout.femaster')
 @section('content')
    <div class="container-sm">
        <h2> ALLL USSER BLADE </h2>

       {{--  <p>{{ $dayOfWeek[4] }}</p>

         <p>{{ $info['name'] }}</p>
        <p>{{ $info['modules'][0] }}</p> --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tarefa</th>
                    <th scope="col">Nome</th>
                    <th>CREATE</th>
                    <th>READ</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td><a href="{{route('tasks.add_tasks')}}" class="btn btn-success">NOVA TAREFA</a></td>
                        <td><a href="{{route('tasks.allTasks')}}" class="btn btn-primary">VER</a></td>
                        <td><a href="{{route('tasks.view', $item->id)}}" class="btn btn-info">ATUALIZAR</a></td>
                        <td><a href="{{route('tasks.delete', $item->id)}}" class="btn btn-danger">DELETE</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
