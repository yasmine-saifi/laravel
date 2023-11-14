<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List des noms et villes des fornisseurs :</h1>
    @if (isset($columns))
        <ul>
            @foreach ($columns as $col)
                    <li><strong>Nom du fornisseur :</strong>{{ $col['nom'] }}, <strong>Ville du fornisseur :</strong> {{ $col['ville'] }}</li>
            @endforeach
        </ul>
    @endif
    <br>
    <a href="{{route('fornisseurhome')}}">Go back to menu</a>

</body>
</html>
