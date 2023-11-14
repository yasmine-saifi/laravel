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
<br>
<a href="{{ route('articlehome') }}">Go back</a>