<article>
    <a href="{{ route('animals.show', $id) }}">
        <img src="{{ asset('images/animals/' . $photo) }}" alt="{{ $name }}">
    </a>

    <h3>{{ $name }}</h3>
    <p>Espèce : {{ $species }}</p>
    <p>Age : {{ $age }} ans</p>
    <p>{{ $description }}</p>

    <a href="{{ route('animals.update', $id) }}">Modifier</a>
    <a href="{{ route('animals.delete', $id) }}">Supprimer</a>
</article>