<h1>List des poids et descriptions :</h1>
    <ul>
        @foreach ($articledata as $data)
            <li>
                <strong>description: {{ $data['description'] }}</strong>
                <strong>poids: {{ $data['poids'] }}</strong>

            </li>
        @endforeach
    </ul>
    <br>
<a href="{{ route('articlehome') }}">Go back</a>