<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'F1 2025')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Variables de color F1 */
        :root {
            --bs-primary: #e10600; /* Rojo F1 Oficial */
            --bs-secondary: #15151e; /* Fondo oscuro principal */
            --bs-dark: #1f1f27; /* Fondo de las tarjetas/cards */
        }
        
        /* Reseteo del body al tema oscuro */
        body { 
            background-color: var(--bs-secondary); 
            color: #ffffff; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Clases base personalizadas */
        .bg-secondary { background-color: var(--bs-secondary) !important; }
        .bg-dark { background-color: var(--bs-dark) !important; }
        .text-primary { color: var(--bs-primary) !important; }
        
        /* Estilos del Botón F1 */
        .btn-primary { 
            background-color: var(--bs-primary) !important; 
            border: none; 
            color: white; 
            font-weight: bold; 
            border-radius: 0; 
            text-transform: uppercase;
        }
        .btn-primary:hover {
            background-color: #b30500 !important; 
        }
        
        /* Estilos de la Barra de Navegación */
        .navbar { background-color: #000000; }
        .navbar-nav .nav-link { 
            color: #ffffff !important; 
            font-size: 0.75rem; 
            font-weight: bold; 
            text-transform: uppercase; 
            margin-left: 20px;
            letter-spacing: 1px;
        }
        .navbar-nav .nav-link:hover { color: var(--bs-primary) !important; }
        
        /* Estilos de las Tarjetas (Cards) */
        .card { 
            background-color: var(--bs-dark); 
            border: none; 
            border-radius: 4px;
        }
        .card-img-placeholder {
            height: 200px;
            background-color: #ffffff; 
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Forzar textos blancos en todas las pestañas */
        h1, h2, h3, h4, h5, h6, p, small, strong, span, label, .text-muted, .text-dark:not(input):not(textarea) {
            color: #ffffff !important;
        }
        
        /* Proteger inputs del formulario para que sean legibles */
        input.form-control, textarea.form-control {
            color: #212529 !important; 
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-xl py-3"> 
            <div class="container d-flex justify-content-between align-items-center">
                
                <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
                    <img src="{{ asset('img/logo-f1.png') }}" alt="Logo Formula 1" style="height: 40px; width: auto; object-fit: contain;">
                </a>

                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="navbar-nav d-flex flex-wrap justify-content-end">
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

    <main class="container py-5 flex-grow-1">
        @yield('contenido')
    </main>

    <footer class="container py-5 mt-5 border-top border-secondary mt-auto">
        <div class="row text-muted" style="font-size: 0.85rem;">
            
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('img/logo-f1.png') }}" alt="F1 Logo" style="height: 25px; object-fit: contain;" class="mb-3">
                <p class="mb-1 text-white fw-bold">PROYECTO F1 &copy; 2025</p>
                <p class="mb-2">Todos los derechos reservados.</p>
                
                <p class="mb-4 mt-3">
                 <a href="{{ route('faq') }}" class="text-decoration-none fw-bold" style="color: #e10600; font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#e10600'">
                     👉 Ir a Preguntas Frecuentes (FAQ)
                 </a>
                </p>

                <p style="font-size: 0.7rem; color: #6c757d; max-width: 450px;">* Este es un proyecto web no oficial creado con fines educativos. No está afiliado con las empresas del grupo Formula 1.</p>
            </div>

            <div class="col-md-6 d-flex flex-column align-items-md-end justify-content-md-center">
                <h5 class="text-white fw-bold mb-3" style="font-size: 0.85rem; letter-spacing: 1px;">SÍGUENOS</h5>
                
                <div class="d-flex gap-3 mb-4">
                    <a href="#" class="text-muted text-decoration-none" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#e10600'" onmouseout="this.style.color='#6c757d'">📱</a>
                    <a href="#" class="text-muted text-decoration-none" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#e10600'" onmouseout="this.style.color='#6c757d'">🐦</a>
                    <a href="#" class="text-muted text-decoration-none" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#e10600'" onmouseout="this.style.color='#6c757d'">▶️</a>
                </div>

                <a href="{{ route('contacto') }}" class="btn btn-outline-light btn-sm rounded-0 fw-bold px-4 py-2" style="font-size: 0.75rem; letter-spacing: 1px;">
                    FORMULARIO DE CONTACTO
                </a>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>