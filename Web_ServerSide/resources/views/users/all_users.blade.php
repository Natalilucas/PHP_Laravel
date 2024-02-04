@extends('layout.femaster')

    @section('content')
    <div class="container-sm">
       {{--  <h2> ALLL USSER BLADE </h2>
        <p>{{ $hello }}</p>
        <p>{{ $dayOfWeek[4] }}</p>

         <p>{{ $info['name'] }}</p>
        <p>{{ $info['modules'][0] }}</p> --}}
        @if (session('message'))
        <div class="alert alert-info">
            {{session('message')}}
        </div>
        @endif
        <table class="table-bordered">
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th>id</th>
                    <th>nome</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>CREATE</th>
                    <th>READ</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{route('users.view', $user->id)}}" class="btn btn-info">Adicionar</a></td>
                        <td><a href="" class="btn btn-sucess">Ver</a></td>
                        <td><a href="{{route('users.view', $user->id)}}" class="btn btn-primary">Atualizar</a></td>
                        <td><a href="{{route('users.delete', $user->id)}}" class="btn btn-danger">Delete</a></td>
                     </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
