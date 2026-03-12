<article class="animal-card">
    <a href="{{ route('animals.show', $id) }}" class="animal-card-image">
        <img src="{{ asset('images/animals/' . $photo) }}" alt="{{ $name }}">
    </a>

    <div class="animal-card-body">
        <h2>{{ $name }}</h2>
        <p class="animal-meta">Espèce : {{ $species }}</p>
        <p class="animal-meta">Age : {{ $age }} ans</p>
        <p class="animal-description">{{ $description }}</p>

        <div class="animal-actions">
            <a href="{{ route('animals.update', $id) }}">Modifier</a>
            <a href="{{ route('animals.delete', $id) }}">Supprimer</a>
        </div>
    </div>
</article>