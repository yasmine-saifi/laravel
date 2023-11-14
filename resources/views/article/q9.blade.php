<h1>List descriptions ayant le prix d'achat < à 500 + couleur vert:</h1>
<ul>
    @foreach ($decs as $description)
        <li><strong>description: {{ $description }}</strong></li>
    @endforeach
</ul>
<br>
<a href="{{ route('articlehome') }}">Go back</a>