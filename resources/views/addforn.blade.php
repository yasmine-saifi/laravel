<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Fornisseur</title>
</head>
<body>
    <form action="{{ route('store_forn') }}" method="post">
        @csrf
        @method('POST')
        <label >Nom:</label><br>
        <input type="text"  name="nom" ><br>
        <label >Ville :</label><br>
        <input type="text" name="ville" ><br><br>
        
        
        <input type="submit" value="Submit">
      </form> <br>

      <a href="{{route('fornisseurs')}}">Go back</a>
</body>
</html>