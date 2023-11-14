<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>List des fornisseurs d'agadir :</h1>
        <ul>
            @foreach ($fournisseur_aga as $fornisseur)
                <li>{{ $fornisseur->nom }} --- {{ $fornisseur->ville }}</li>
            @endforeach
        </ul>

    <h1>List des Villes :</h1>
        <ul>
            @foreach ($villes as $ville)
                <li>{{ $ville }}</li>
            @endforeach
        </ul>


    <a href="{{ route('fornisseurs') }}"><button>Go back</button></a>

</body>
</html>
