@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <section class="home-section">
        <div class="container">
            <h1 class="page-title">Nos animaux</h1>

            @if ($animals->isEmpty())
                <p class="empty-message">Aucun animal trouvé.</p>
            @else
                <div class="animals-grid">
                    @foreach ($animals as $animal)
                        <x-animal-card
                            :id="$animal->id"
                            :name="$animal->name"
                            :species="$animal->species"
                            :age="$animal->age"
                            :description="$animal->description"
                            :photo="$animal->photo"
                        />
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection