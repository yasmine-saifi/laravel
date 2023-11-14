<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List des fornisseurs :</h1>
    @if (isset($fornisseurss))
        <ul>
            @foreach ($fornisseurss as $fornisseur)
                    <li><strong>ID du fornisseur :</strong>{{ $fornisseur->id }},
                        <strong>Nom du fornisseur :</strong>{{ $fornisseur->nom }},
                         <strong>Ville du fornisseur :</strong> {{ $fornisseur->ville }}</li>
            @endforeach
        </ul>
    @endif
    <br>
    <a href="{{route('fornisseurhome')}}">Go back to menu</a>

</body>
</html>
