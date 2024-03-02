@extends('layout.femaster')

@section('content')
    <div class="container-sm">
        {{--  <h2> ALLL USSER BLADE </h2>
        <p>{{ $hello }}</p>
        <p>{{ $dayOfWeek[4] }}</p>

         <p>{{ $info['name'] }}</p>
        <p>{{ $info['modules'][0] }}</p> --}}
        <div class="">
            <form method="GET" class="form-inline w-1">
                <div class="input-group">
                    <input type="search" value="" name="search" id="" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">PROCURAR </button>
                </div>

            </form>
        </div>


        @if (session('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">CREATE</th>
                        <th scope="col">READ</th>
                        <th scope="col">UPDATE</th>
                        <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <a href="{{ route('users.view', $user->id) }}" class="btn btn-info">Adicionar</a>
                        </td>
                        <td>
                            <a href="{{ route('users.view', $user->id) }}" class="btn btn-dark">Ver Dados</a>
                        </td>
                        <td>
                            <a href="{{ route('users.view', $user->id) }}" class="btn btn-warning">Atualizar</a>
                        </td>
                        <td>
                            <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
