@extends ('bananas.layout')

@section('content')

    <div>
        <h2>{{$banana->tag}}</h2>
        <h5>{{$banana->adrese}}</h5>
        <h4>Priekšsēdētājs: {{$banana->vaditajs->name}} {{$banana->vaditajs->surname}}</h4>

        <hr>

        <p>Šeit būs SP pieejamais resursu saraksts:</p>

        ///Šeit salikt to, ka var redzēt katras SP resusrsus
        ///Pievienot attiecības starp resursiem un SP

        {{--@foreach($banana as $banana)--}}
            {{--<ul>--}}
                {{--<li>{{$banana->}}</li>--}}
            {{--</ul>--}}

        {{--@endforeach--}}
        <hr>
        <p>SP Biedri</p>
        <hr>
        @foreach($banana->biedrs as $biedrs)
            <ul>
                <li>{{$biedrs->name}} {{$biedrs->surname}}</li>
            </ul>
         @endforeach

        <hr>

        <div class="card">

            <div class="card-block">

                <form method="POST" action="/SP/{{ $banana->id }}/resursi">

                    {{ csrf_field() }}

                <div class="form-group">

                    <div class="form-group">
                        <textarea name="title" placeholder="Pievieno virsrakstu" class="form-control"></textarea>

                    </div>

                    <div class="form-group">
                        <textarea name="description" placeholder="Pievieno aprakstu" class="form-control"></textarea>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Publicēt!</button>
                    </div>
                </div>

                </form>
            </div>

        </div>
    </div>




@endsection