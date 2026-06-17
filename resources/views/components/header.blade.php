<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'F1 2025')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('css/f1-theme.css') }}" rel="stylesheet">

<style>
    /* ========================================
       SISTEMA DE COLORES F1 2025
       ======================================== */
    :root {
        /* Colores Principales F1 */
        --f1-red: #E10600;           /* Rojo oficial F1 */
        --f1-red-dark: #B30500;      /* Rojo oscuro hover */
        --f1-red-light: #FF1E00;     /* Rojo claro acentos */
        
        /* Colores de Fondo */
        --f1-black: #15151E;         /* Negro principal */
        --f1-black-light: #1F1F27;   /* Negro cards */
        --f1-black-pure: #000000;    /* Negro puro navbar */
        
        /* Colores de Texto */
        --f1-white: #FFFFFF;         /* Blanco principal */
        --f1-gray: #38383F;          /* Gris medio */
        --f1-gray-light: #6C757D;    /* Gris claro */
        --f1-gray-dark: #212529;     /* Gris oscuro */
        
        /* Colores de Acento */
        --f1-gold: #FFD700;          /* Dorado para destacados */
        --f1-silver: #C0C0C0;        /* Plata para segundo lugar */
        --f1-bronze: #CD7F32;        /* Bronce para tercer lugar */
        
        /* Colores de Estado */
        --f1-success: #28A745;       /* Verde éxito */
        --f1-warning: #FFC107;       /* Amarillo advertencia */
        --f1-danger: #DC3545;        /* Rojo peligro */
        --f1-info: #17A2B8;          /* Azul información */
        
        /* Sobrescribir variables Bootstrap */
        --bs-primary: var(--f1-red);
        --bs-secondary: var(--f1-black);
        --bs-dark: var(--f1-black-light);
        --bs-body-bg: var(--f1-black);
        --bs-body-color: var(--f1-white);
    }
    
    /* ========================================
       ESTILOS BASE
       ======================================== */
    body {
        background-color: var(--f1-black);
        color: var(--f1-white);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
    }

    /* ========================================
       CLASES DE UTILIDAD
       ======================================== */
    /* Fondos */
    .bg-f1-red { background-color: var(--f1-red) !important; }
    .bg-f1-black { background-color: var(--f1-black) !important; }
    .bg-f1-black-light { background-color: var(--f1-black-light) !important; }
    .bg-f1-gray { background-color: var(--f1-gray) !important; }
    
    /* Textos */
    .text-f1-red { color: var(--f1-red) !important; }
    .text-f1-white { color: var(--f1-white) !important; }
    .text-f1-gray { color: var(--f1-gray-light) !important; }
    .text-f1-gold { color: var(--f1-gold) !important; }
    
    /* Bordes */
    .border-f1-red { border-color: var(--f1-red) !important; }
    .border-f1-gray { border-color: var(--f1-gray) !important; }
    
    /* ========================================
       BOTONES
       ======================================== */
    .btn-primary {
        background-color: var(--f1-red) !important;
        border: none;
        color: var(--f1-white);
        font-weight: bold;
        border-radius: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        padding: 10px 24px;
    }
    .btn-primary:hover {
        background-color: var(--f1-red-dark) !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(225, 6, 0, 0.4);
    }
    
    .btn-outline-primary {
        border: 2px solid var(--f1-red);
        color: var(--f1-red);
        background: transparent;
        font-weight: bold;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }
    .btn-outline-primary:hover {
        background-color: var(--f1-red);
        color: var(--f1-white);
        transform: translateY(-2px);
    }
    
    .btn-outline-light {
        border: 2px solid var(--f1-white);
        color: var(--f1-white);
        transition: all 0.3s ease;
    }
    .btn-outline-light:hover {
        background-color: var(--f1-white);
        color: var(--f1-black);
    }
    
    /* ========================================
       NAVEGACIÓN
       ======================================== */
    .navbar {
        background-color: var(--f1-black-pure);
        border-bottom: 3px solid var(--f1-red);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }
    
    .navbar-nav .nav-link {
        color: var(--f1-white) !important;
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-left: 20px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        position: relative;
        padding-bottom: 8px;
    }
    
    .navbar-nav .nav-link:hover {
        color: var(--f1-red) !important;
    }
    
    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--f1-red);
        transition: width 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }
    
    /* ========================================
       TARJETAS (CARDS)
       ======================================== */
    .card {
        background-color: var(--f1-black-light);
        border: 1px solid var(--f1-gray);
        border-radius: 4px;
        transition: all 0.3s ease;
        overflow: hidden;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(225, 6, 0, 0.3);
        border-color: var(--f1-red);
    }
    
    .card-img-top {
        transition: transform 0.3s ease;
    }
    
    .card:hover .card-img-top {
        transform: scale(1.05);
    }
    
    .card-img-placeholder {
        height: 200px;
        background: linear-gradient(135deg, var(--f1-gray) 0%, var(--f1-black-light) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--f1-gray-light);
    }
    
    /* ========================================
       TÍTULOS Y TEXTOS
       ======================================== */
    h1, h2, h3, h4, h5, h6 {
        color: var(--f1-white) !important;
        font-weight: bold;
        letter-spacing: 0.5px;
    }
    
    h1 {
        font-size: 2.5rem;
        text-transform: uppercase;
        background: linear-gradient(90deg, var(--f1-white) 0%, var(--f1-red) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    p, small, strong, span, label {
        color: var(--f1-white) !important;
    }
    
    .text-muted {
        color: var(--f1-gray-light) !important;
    }
    
    /* ========================================
       FORMULARIOS
       ======================================== */
    input.form-control,
    textarea.form-control,
    select.form-control {
        background-color: var(--f1-black-light);
        border: 2px solid var(--f1-gray);
        color: var(--f1-white) !important;
        transition: all 0.3s ease;
    }
    
    input.form-control:focus,
    textarea.form-control:focus,
    select.form-control:focus {
        background-color: var(--f1-black-light);
        border-color: var(--f1-red);
        color: var(--f1-white) !important;
        box-shadow: 0 0 0 0.2rem rgba(225, 6, 0, 0.25);
    }
    
    input.form-control::placeholder,
    textarea.form-control::placeholder {
        color: var(--f1-gray-light) !important;
    }
    
    /* ========================================
       BADGES Y ETIQUETAS
       ======================================== */
    .badge {
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 6px 12px;
    }
    
    .badge-gold {
        background-color: var(--f1-gold);
        color: var(--f1-black);
    }
    
    .badge-silver {
        background-color: var(--f1-silver);
        color: var(--f1-black);
    }
    
    .badge-bronze {
        background-color: var(--f1-bronze);
        color: var(--f1-white);
    }
    
    /* ========================================
       EFECTOS Y ANIMACIONES
       ======================================== */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(225, 6, 0, 0.3);
    }
    
    .gradient-red {
        background: linear-gradient(135deg, var(--f1-red) 0%, var(--f1-red-dark) 100%);
    }
    
    .gradient-dark {
        background: linear-gradient(135deg, var(--f1-black) 0%, var(--f1-black-light) 100%);
    }
    
    /* ========================================
       LÍNEAS DECORATIVAS
       ======================================== */
    .border-top-red {
        border-top: 3px solid var(--f1-red) !important;
    }
    
    .border-bottom-red {
        border-bottom: 3px solid var(--f1-red) !important;
    }
    
    .border-left-red {
        border-left: 4px solid var(--f1-red) !important;
    }
    
    /* ========================================
       SCROLLBAR PERSONALIZADO
       ======================================== */
    ::-webkit-scrollbar {
        width: 12px;
    }
    
    ::-webkit-scrollbar-track {
        background: var(--f1-black);
    }
    
    ::-webkit-scrollbar-thumb {
        background: var(--f1-gray);
        border-radius: 6px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: var(--f1-red);
    }
</style>