@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Nos animaux</h1>

    @forelse ($animals as $animal)
        <x-animal-card
            :id="$animal->id"
            :name="$animal->name"
            :species="$animal->species"
            :age="$animal->age"
            :description="$animal->description"
            :photo="$animal->photo"
        />
    @empty
        <p>Aucun animal trouvé.</p>
    @endforelse
@endsection