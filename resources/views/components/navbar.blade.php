<header>
    <nav class="navbar navbar-expand-xl py-3"> 
        <div class="container d-flex justify-content-between align-items-center">
            
            <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
                <img src="{{ asset('img/logo-f1.png') }}" alt="Logo Formula 1" style="height: 40px; width: auto; object-fit: contain;">
            </a>

            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto align-items-center">
                    <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                    <a class="nav-link text-danger" href="{{ route('articulos') }}">Directorio</a>
                    <a class="nav-link" href="{{ route('calendario') }}">Calendario</a>
                    <a class="nav-link" href="{{ route('clasificacion') }}">Clasificación</a>
                    <a class="nav-link" href="{{ route('equipos') }}">Equipos</a>
                    <a class="nav-link" href="{{ route('pilotos') }}">Pilotos</a>
                    <a class="nav-link" href="{{ route('galeria') }}">Galería</a>
                    <a class="nav-link" href="{{ route('reglamento') }}">Reglamento</a>
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
</header>