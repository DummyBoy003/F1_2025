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