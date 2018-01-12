@extends ('.bananas.layout')

@section('content')

    <div>
        <h2>{{$banana->tag}}</h2>
        {{$banana->adrese}}
        <hr>
        <p>Šajā SP pieejamais resursu saraksts:</p>
        <hr>
        <ul>
            <li>Resurss1</li>
        </ul>

    </div>

@endsection