@extends ('bananas.layout')

@section ('content')

    <div class="col-sm-8 blog-main">

        <p>Šeit būs saraksts ar AII SP</p>
        @foreach($bananas as $banana)
            @include('bananas.skati.spdati')
        @endforeach
    </div><!-- /.blog-main -->


@endsection