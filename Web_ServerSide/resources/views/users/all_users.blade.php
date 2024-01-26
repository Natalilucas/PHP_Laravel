@extends('layout.femaster')

    @section('content')
    <div class="container-sm">
        <h2> ALLL USSER BLADE </h2>
        <p>{{ $hello }}</p>
       {{--  <p>{{ $dayOfWeek[4] }}</p>

         <p>{{ $info['name'] }}</p>
        <p>{{ $info['modules'][0] }}</p> --}}

        <table class="table-bordered">
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['phone'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{route('users.view', $user->id)}}" class="btn btn-info">Ver</a></td>                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
