<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>List des id et descriptions des article avec couleur vert:</h1>
    <ul>
        @foreach ($articles as $article)
        <li>
            <strong>description :</strong>{{ $article->description }}
            ---<strong>poids :</strong> {{ $article->poids }}
            ---<strong>couleur :</strong>{{ $article->couleur }} ---
            <strong>prix_achat :</strong>{{ $article->pirx_achat }}---
            <strong>fornisseur :</strong>{{ $article->forsnisseur }}
        </li>
        @endforeach
    </ul>
    <br>
    <a href="{{ route('articlehome') }}">Go back</a>
    

</body>

</html>
