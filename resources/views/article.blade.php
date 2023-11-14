<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('fornisseurs') }}"><button>Fournisseur Table </button></a>

    <h1>List des fornisseurs d'agadir :</h1>
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

    <h1>List des poids et descriptions :</h1>
    <ul>
        @foreach ($articledata as $data)
            <li>
                <strong>description: {{ $data['description'] }}</strong>
                <strong>poids: {{ $data['poids'] }}</strong>

            </li>
        @endforeach
    </ul>

    <h1>Article 1:</h1>
    <strong>{{ $article1->description }}</strong>
    <strong>{{ $article1->poids }}</strong>
    <strong>{{ $article1->couleur }}</strong>
    <strong>{{ $article1->pirx_achat }}</strong>
    <strong>{{ $article1->forsnisseur }}</strong>


    <h1>List des id et descriptions des article avec couleur vert:</h1>
    <ul>
        @foreach ($vertdata as $vert)
            <li>
                <strong>id: {{ $vert['id'] }}</strong>
                <strong>description: {{ $vert['description'] }}</strong>

            </li>
        @endforeach
    </ul>



    <h1>List descriptions ayant le prix d'achat < à 500 + couleur vert:</h1>
            <ul>
                @foreach ($decs as $description)
                    <li><strong>description: {{ $description }}</strong></li>
                @endforeach
            </ul>

            <h1>Avg des prix d'achat:</h1>
            <strong>{{ $moy }}</strong>


            <h1>Les Articles ayant un poids entre 200 et 300:</h1>
            <ul>
                @foreach ($artcls as $artcl)
                    <li><strong>{{ $artcl->id }}</strong> ---
                        <strong>{{ $artcl->description }}</strong>
                        --- <strong>{{ $artcl->poids }}</strong>
                        --- <strong>{{ $artcl->couleur }}</strong>
                        ---<strong>{{ $artcl->pirx_achat }}</strong>
                        ---- <strong>{{ $artcl->forsnisseur }}</strong> </li>
                @endforeach
            </ul>


            <h1>Nombre d'Articles :</h1>
            <strong>{{ $count }} articles</strong>














</body>

</html>
