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
                    <th scope="col">Descrição</th>
                    <th scope="col">Data</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->due_at }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->due_at }}</td>

                        <td><a href="{{route('tasks.view', $item->id)}}">VER/ATUALIZAR</a></td>
                        <td><a href="{{route('tasks.delete', $item->id)}}">DELETE</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
