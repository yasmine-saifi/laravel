<h1>List des id et descriptions des article avec couleur vert:</h1>
<ul>
    @foreach ($vertdata as $vert)
        <li>
            <strong>id: {{ $vert['id'] }}</strong>
            <strong>description: {{ $vert['description'] }}</strong>

        </li>
    @endforeach
</ul>
<br>
<a href="{{ route('articlehome') }}">Go back</a>
