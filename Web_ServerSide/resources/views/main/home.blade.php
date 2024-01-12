
        @extends('layout.femaster')
        @section('content')
        <h3>Hello World to Natali in PHP</h3>
        <p>It's normal for a programmer to know a lot of languages</p>

        <ul>
            <li><a href="{{route('bemvindos')}}">Go Home</a></li>
            <li><a href="{{route('users.all')}}">All Users</a></li>
            <li><a href="{{route('users.add')}}">Add Users</a></li>

        </ul>
        <h3>All Contacts</h3>
        <p>{{$contacts['name']}}</p>
        <p>{{$contacts['adress']}}</p>
        <p>{{$contacts['email']}}</p>




        @endsection
