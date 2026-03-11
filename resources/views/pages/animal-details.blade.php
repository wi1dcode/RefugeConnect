@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <section>
        <img src="{{ asset('images/animals' . $animal->photo) }}" alt="{{ $animal->name }}">

        <div>
            <h1>{{ $animal->name }}</h1>
            <p>Espèce : {{ $animal->species }}</p>
            <p>Age : {{ $animal->age }} ans</p>
            <p>{{ $animal->description }}</p>
        </div>
    </section>
@endsection