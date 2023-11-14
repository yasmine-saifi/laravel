<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornisseur</title>
</head>
<body>
    <div>
        <strong>Nom:</strong>
        <p>{{$fornisseur->nom}}</p>
        <strong>Ville:</strong>
        <p>{{$fornisseur->ville}}</p>
    </div>
    <a href="{{route('edit_forn',['fornisseur'=>$fornisseur])}}">Edit</a>
    <a href="{{route('fornisseurs')}}">Go back</a>

</body>
</html>