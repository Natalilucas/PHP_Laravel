
    @extends('layout.femaster')

    @section('content')
    <div class="container-sm">
    <h2> ALLL USSER BLADE </h2>
    <p>{{ $hello }}</p>
    <p>{{ $dayOfWeek[4] }}</p>
    {{-- <p>{{ $info['name'] }}</p>
    <p>{{ $info['modules'][0] }}</p> --}}

    <table class="table-bordered">
        <tbody>

            @foreach ($arrayContacts as $item)

            <tr>
                <td scope='col' class="p-1 m-md-2">{{$item['id']}}</td>
                <td scope='col'>{{$item['name']}}</td>
                <td scope='col'>{{$item['phone']}}</td>
            </tr>

            @endforeach

        </tbody>
    </table>


    </div>
    @endsection


