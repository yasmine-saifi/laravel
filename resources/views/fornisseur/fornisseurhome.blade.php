<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Fornisseur Menu :</h1><br>
    <hr><br>
    <h2>Insert Update Delete des fornisseurs <a href="{{ route('fornisseurhome_insert') }}">GO</a></h2>
    <h2>1.La liste des fournisseurs. <a href="{{ route('fornisseurhome_list') }}">GO</a></h2>
    
    <h2>2.La liste des fournisseurs d’Agadir. <a href="{{ route('fornisseurhome_agadir') }}">GO</a></h2> 
    <h2>3.Les noms et les villes des fournisseurs. <a href="{{ route('fornisseurhome_list_noms_villes') }}">GO</a></h2> 
    <h2>4.Les différentes villes des fournisseurs. <a href="{{ route('fornisseurhome_villes') }}">GO</a></h2> 

    <a href="{{route('home')}}">Go back Home</a>




</body>
</html>
