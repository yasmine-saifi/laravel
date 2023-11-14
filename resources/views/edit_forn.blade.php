<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Fornisseur</title>
</head>
<body>
    <form action="{{ route('update_forn',['fornisseur'=>$fornisseur]) }}" method="post">
        @csrf
        @method('PUT')
        <label >Nom:</label><br>
        <input type="text"  name="nom" value="{{$fornisseur->nom}}"><br>
        <label >Ville :</label><br>
        <input type="text" name="ville" value="{{$fornisseur->ville}}"><br><br>
        
        
        <input type="submit" value="Submit">
      </form> 
</body>
</html>