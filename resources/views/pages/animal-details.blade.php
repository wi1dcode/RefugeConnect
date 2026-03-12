@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <section class="details-section">
        <div class="container">
            <div class="animal-details-page">
                <h1 class="animal-details-title">{{ $animal->name }}</h1>

                <div class="animal-details">
                    <div class="animal-details-image">
                        <img src="{{ asset('images/animals/' . $animal->photo) }}" alt="{{ $animal->name }}">
                    </div>

                    <div class="animal-details-content">
                        <p>Espèce : {{ $animal->species }}</p>
                        <p>Age : {{ $animal->age }} ans</p>
                        <p>{{ $animal->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection