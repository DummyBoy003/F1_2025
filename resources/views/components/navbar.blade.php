<header>
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container d-flex justify-content-between align-items-center">
            
            <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
                <img src="{{ asset('img/logo-f1.png') }}" alt="Logo Formula 1" style="height: 40px; width: auto; object-fit: contain;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border-color: var(--f1-red);">
                <span class="navbar-toggler-icon" style="filter: brightness(0) invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    
                    {{-- Inicio --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('inicio') ? 'active text-f1-red' : '' }}" href="{{ route('inicio') }}">
                            🏠 Inicio
                        </a>
                    </li>

                    {{-- Calendario --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('calendario') ? 'active text-f1-red' : '' }}" href="{{ route('calendario') }}">
                            📅 Calendario
                        </a>
                    </li>

                    {{-- Clasificación --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('clasificacion') ? 'active text-f1-red' : '' }}" href="{{ route('clasificacion') }}">
                            🏆 Clasificación
                        </a>
                    </li>

                    {{-- Dropdown: Pilotos & Equipos --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('pilotos') || request()->routeIs('equipos') || request()->routeIs('perfil-piloto') ? 'active text-f1-red' : '' }}"
                           href="#"
                           id="navbarDropdownPilotos"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            👥 Pilotos & Equipos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownPilotos" style="background-color: var(--f1-black-light); border: 1px solid var(--f1-red);">
                            <li><a class="dropdown-item {{ request()->routeIs('pilotos') || request()->routeIs('perfil-piloto') ? 'active' : '' }}" href="{{ route('pilotos') }}">🏎️ Pilotos</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('equipos') ? 'active' : '' }}" href="{{ route('equipos') }}">🏁 Equipos</a></li>
                        </ul>
                    </li>

                    {{-- Dropdown: Multimedia --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('galeria') || request()->routeIs('articulos') ? 'active text-f1-red' : '' }}"
                           href="#"
                           id="navbarDropdownMultimedia"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            📸 Multimedia
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMultimedia" style="background-color: var(--f1-black-light); border: 1px solid var(--f1-red);">
                            <li><a class="dropdown-item {{ request()->routeIs('galeria') ? 'active' : '' }}" href="{{ route('galeria') }}">🖼️ Galería</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('articulos') ? 'active' : '' }}" href="{{ route('articulos') }}">📰 Directorio</a></li>
                        </ul>
                    </li>

                    {{-- Dropdown: Info --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('reglamento') || request()->routeIs('faq') || request()->routeIs('contacto') ? 'active text-f1-red' : '' }}"
                           href="#"
                           id="navbarDropdownInfo"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            ℹ️ Info
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownInfo" style="background-color: var(--f1-black-light); border: 1px solid var(--f1-red);">
                            <li><a class="dropdown-item {{ request()->routeIs('reglamento') ? 'active' : '' }}" href="{{ route('reglamento') }}">📋 Reglamento</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">❓ FAQ</a></li>
                            <li><hr class="dropdown-divider" style="border-color: var(--f1-gray);"></li>
                            <li><a class="dropdown-item {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">✉️ Contacto</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Estilos para el navbar mejorado */
    .navbar-nav .nav-link {
        padding: 0.5rem 1rem;
        transition: all 0.3s ease;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .navbar-nav .nav-link:hover {
        color: var(--f1-red) !important;
        transform: translateY(-2px);
    }

    .navbar-nav .nav-link.active {
        color: var(--f1-red) !important;
        font-weight: bold;
    }

    .dropdown-menu {
        border-radius: 0;
        margin-top: 0.5rem;
        box-shadow: 0 4px 15px rgba(225, 6, 0, 0.3);
    }

    .dropdown-item {
        padding: 0.75rem 1.5rem;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .dropdown-item:hover {
        background-color: var(--f1-red) !important;
        color: var(--f1-white) !important;
        padding-left: 2rem;
    }

    .dropdown-item.active {
        background-color: var(--f1-red);
        color: var(--f1-white);
    }

    /* Responsive: mejor espaciado en móvil */
    @media (max-width: 991px) {
        .navbar-nav {
            padding-top: 1rem;
        }

        .navbar-nav .nav-link {
            padding: 0.75rem 0;
            border-bottom: 1px solid var(--f1-gray);
        }

        .dropdown-menu {
            background-color: var(--f1-gray) !important;
            border: none;
            margin-top: 0;
        }

        .dropdown-item {
            padding-left: 2rem;
        }
    }
</style>