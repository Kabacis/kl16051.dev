<div>
    <h2>
        <a href="/SP/{{$banana->id}}">
            {{$banana->tag}}
        </a>
    </h2>

    <p>SP adrese: {{ $banana->adrese }}</p>
    <p>Priekšsēdētājs: {{$banana->vaditajs->name }}  {{$banana->vaditajs->surname}}</p>
</div>