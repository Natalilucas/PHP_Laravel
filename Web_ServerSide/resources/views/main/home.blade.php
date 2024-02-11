
        @extends('layout.femaster')
        @section('content')
        <h3>Hello World to Natali in PHP</h3>
        @auth
           <h1>Olá, {{Auth::user()->name }}</h1>
        @endauth
        <p>It's normal for a programmer to know a lot of languages</p>

        <ul>
            <!--<li><a href="{{route('bemvindos')}}">Go Home</a></li>-->
            <li><a href="{{route('users.all')}}">All Users</a></li>
            <li><a href="{{route('users.add')}}">Add Users</a></li>
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li><a href="{{route('tasks.allTasks')}}">All tasks</a></li>
            <li><a href="{{route('tasks.add_tasks')}}">Add tasks</a></li>
            <li><a href="{{route('home.dashboard')}}">BackOffice</a></li>

        </ul>

        <!--<h3>All Contacts</h3>
        <p>{{$contacts['name']}}</p>
        <p>{{$contacts['adress']}}</p>
        <p>{{$contacts['email']}}</p>-->




        @endsection
