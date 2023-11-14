<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>update/delete/insert in List des fornisseurs :</h1>
    @if (isset($fornisseurs))
        <ul>
            @foreach ($fornisseurs as $fornisseur)
                <a href="{{ route('show_forn', ['fornisseur' => $fornisseur->id]) }}">
                    <li><strong>Nom du fornisseur :</strong>{{ $fornisseur->nom }}, <strong>Ville du fornisseur :</strong> {{ $fornisseur->ville }}</li>
                    <form action="{{route('destroy_forn', ['fornisseur' => $fornisseur->id])}}" action="post">
                        @csrf 
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </a>
            @endforeach
        </ul>
    @endif
    <br>
    <a href="{{route('fornisseurhome')}}">Go back to menu</a>

</body>
</html>