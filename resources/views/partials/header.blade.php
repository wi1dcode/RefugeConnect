<header class="site-header">
    <div class="container">
        <a href="{{ route('home') }}" class="site-logo">
            <img src="{{ asset('logo.png') }}" alt="Refuge Connect">
        </a>

        <nav class="site-nav">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('animals.create') }}">Ajouter un animal</a>
        </nav>
    </div>
</header>