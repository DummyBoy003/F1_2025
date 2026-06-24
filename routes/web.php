<?php
use Illuminate\Support\Facades\Route;

// Rutas estáticas actualizadas a la nueva carpeta 'pages'
Route::get('/', function () { return view('pages.inicio'); })->name('inicio');
Route::get('/calendario', function () { return view('pages.calendario'); })->name('calendario');
Route::get('/clasificacion', function () { return view('pages.clasificacion'); })->name('clasificacion');
Route::get('/equipos', function () { return view('pages.equipos'); })->name('equipos');
Route::get('/pilotos', function () { return view('pages.pilotos'); })->name('pilotos');
Route::get('/faq', function () { return view('pages.faq'); })->name('faq');
Route::get('/articulos', function () { return view('pages.articulos'); })->name('articulos');

// --- RUTA DINÁMICA DE DETALLE GP ---
Route::get('/detalle-gp/{slug?}', function ($slug = 'australia') {
    
    // Nuestra "Base de datos" de Grandes Premios
    $carreras = [
        'australia' => [
            'nombre' => 'GP DE AUSTRALIA',
            'fecha' => '14 al 16 de marzo de 2025',
            'circuito' => 'Albert Park Circuit, Melbourne',
            'imagen_principal' => 'gp-australia.jpg',
            'descripcion' => 'El Gran Premio de Australia a menudo marca el emocionante inicio de la temporada. Conocido por su ambiente festivo en Melbourne, Albert Park ofrece un circuito semipermanente rápido y técnico. Equipos locales como McLaren (con la estrella local Oscar Piastri) suelen organizar eventos especiales para los aficionados.',
            'noticia_titulo' => 'ZONA DE AFICIONADOS RENOVADA',
            'noticia_desc' => 'Nuevas tribunas y zonas de entretenimiento confirmadas para 2025.',
            'info_extra' => 'Se espera la presencia de celebridades locales y un concierto masivo post-carrera patrocinado por Heineken.'
        ],
        'china' => [
            'nombre' => 'GP DE CHINA',
            'fecha' => '21 al 23 de marzo de 2025',
            'circuito' => 'Shanghai International Circuit',
            'imagen_principal' => 'gp-china.jpg',
            'descripcion' => 'El Circuito Internacional de Shanghai es famoso por su arquitectura inspirada en el símbolo chino "shang" (arriba) y su desafiante primera curva en forma de caracol. El piloto local Zhou Guanyu asegura que las gradas estén repletas de aficionados apasionados.',
            'noticia_titulo' => 'CELEBRACIÓN DEL AÑO NUEVO',
            'noticia_desc' => 'Eventos culturales en el paddock con temática del Año de la Serpiente.',
            'info_extra' => 'Lenovo, el patrocinador principal, presentará nuevas tecnologías de transmisión durante la carrera.'
        ],
        'japon' => [
            'nombre' => 'GP DE JAPÓN',
            'fecha' => '4 al 6 de abril de 2025',
            'circuito' => 'Suzuka International Racing Course',
            'imagen_principal' => 'gp-japon.jpg',
            'descripcion' => 'Suzuka es un circuito de la vieja escuela y uno de los favoritos de los pilotos por su diseño único en forma de ocho. Los aficionados japoneses son conocidos mundialmente por ser los más dedicados y creativos con sus disfraces temáticos de F1.',
            'noticia_titulo' => 'HOMENAJE A HONDA',
            'noticia_desc' => 'Red Bull y RB lucirán colores especiales en honor a su proveedor de motores.',
            'info_extra' => 'Habrá sesiones de autógrafos extendidas en la fan zone debido a la alta demanda local.'
        ],
        'bahrein' => [
            'nombre' => 'GP DE BAHRÉIN',
            'fecha' => '11 al 13 de abril de 2025',
            'circuito' => 'Bahrain International Circuit, Sakhir',
            'imagen_principal' => 'gp-bahrein.jpg',
            'descripcion' => 'La carrera en el desierto se corre bajo las luces artificiales, ofreciendo un espectáculo visual impresionante. Sakhir es conocida por ser dura con los neumáticos debido a la superficie abrasiva de la pista y la arena del desierto circundante.',
            'noticia_titulo' => 'TESTS DE PRETEMPORADA',
            'noticia_desc' => 'Resumen de los datos recolectados por los equipos en este mismo circuito.',
            'info_extra' => 'Gulf Air organiza espectáculos aéreos exclusivos antes del inicio de la carrera el domingo.'
        ],
        'arabia-saudi' => [
            'nombre' => 'GP DE ARABIA SAUDÍ',
            'fecha' => '18 al 20 de abril de 2025',
            'circuito' => 'Jeddah Corniche Circuit',
            'imagen_principal' => 'gp-arabia.jpg',
            'descripcion' => 'El circuito urbano más rápido del calendario de Fórmula 1. Ubicado junto al Mar Rojo, Jeddah ofrece curvas ciegas de altísima velocidad que no perdonan ningún error. Es una prueba máxima de valentía para los pilotos.',
            'noticia_titulo' => 'MODIFICACIONES EN LA PISTA',
            'noticia_desc' => 'La FIA confirma cambios en las barreras para mejorar la visibilidad en el sector 1.',
            'info_extra' => 'Aramco presentará su nuevo combustible sostenible en el paddock club.'
        ],
        'usa' => [
            'nombre' => 'GP DE ESTADOS UNIDOS',
            'fecha' => '17 al 19 de octubre de 2025',
            'circuito' => 'Circuit of the Americas, Austin',
            'imagen_principal' => 'gp-usa.jpg',
            'descripcion' => 'El COTA en Austin, Texas, es conocido por su masiva afluencia de público y su ambiente festivo estilo tejano. La primera curva, con su empinada cuesta arriba ciega, es una de las más icónicas de la era moderna.',
            'noticia_titulo' => 'FESTIVAL DE MÚSICA F1',
            'noticia_desc' => 'Se anuncian los artistas principales para los conciertos del viernes y sábado.',
            'info_extra' => 'El equipo Haas considera esta su carrera de casa y planea eventos exclusivos para el mercado americano.'
        ]
    ];

    // Busca la carrera, si no encuentra el nombre muestra Australia por defecto
    $gp_seleccionado = $carreras[$slug] ?? $carreras['australia'];
    
    return view('pages.detalle-gp', compact('gp_seleccionado'));

})->name('detalle-gp');
// --------------------------------------

// --- RUTA DINÁMICA DE PERFIL PILOTO ---
// Le agregamos {slug?} para que reciba el nombre del piloto desde el botón
Route::get('/perfil-piloto/{slug?}', function ($slug = 'lance-stroll') {
    
    // Nuestra "Base de datos" temporal de pilotos
    $pilotos = [
        'lance-stroll' => [
            'nombre' => 'LANCE STROLL',
            'numero' => '18',
            'equipo' => 'Aston Martin',
            'equipo_clase' => 'astonmartin',
            'nacionalidad' => '🇨🇦 Canadá',
            'anos_f1' => '8',
            'imagen' => 'lance-stroll.jpg',
            'historia' => 'Piloto canadiense actualmente compitiendo para Aston Martin. Conocido por sus excelentes arrancadas y manejo en lluvia. Hijo del empresario Lawrence Stroll, ha demostrado su talento en múltiples ocasiones con podios y actuaciones destacadas.'
        ],
        'lewis-hamilton' => [
            'nombre' => 'LEWIS HAMILTON',
            'numero' => '44',
            'equipo' => 'Ferrari',
            'equipo_clase' => 'ferrari',
            'nacionalidad' => '🇬🇧 Reino Unido',
            'anos_f1' => '18',
            'imagen' => 'lewis-hamilton.jpg',
            'historia' => 'Siete veces campeón del mundo. Una leyenda viva de la Fórmula 1 que busca seguir haciendo historia en la pista. En 2025 inicia una nueva era con Ferrari, buscando su octavo título mundial y escribir un nuevo capítulo en su legendaria carrera.'
        ],
        'carlos-sainz' => [
            'nombre' => 'CARLOS SAINZ',
            'numero' => '55',
            'equipo' => 'Williams',
            'equipo_clase' => 'williams',
            'nacionalidad' => '🇪🇸 España',
            'anos_f1' => '10',
            'imagen' => 'carlos-sainz.jpg',
            'historia' => 'Piloto español con gran consistencia e inteligencia táctica, brillando en cada carrera que disputa. Tras su exitoso paso por Ferrari, se une a Williams para liderar el resurgimiento de la histórica escudería británica.'
        ],
        'pierre-gasly' => [
            'nombre' => 'PIERRE GASLY',
            'numero' => '10',
            'equipo' => 'Alpine',
            'equipo_clase' => 'alpine',
            'nacionalidad' => '🇫🇷 Francia',
            'anos_f1' => '7',
            'imagen' => 'pierre-gasly.jpg',
            'historia' => 'Piloto francés rápido y agresivo, ganador de Grandes Premios y pieza clave de su escudería. Su victoria en Monza 2020 con AlphaTauri sigue siendo uno de los momentos más memorables de la F1 moderna.'
        ],
        'esteban-ocon' => [
            'nombre' => 'ESTEBAN OCON',
            'numero' => '31',
            'equipo' => 'Alpine',
            'equipo_clase' => 'alpine',
            'nacionalidad' => '🇫🇷 Francia',
            'anos_f1' => '8',
            'imagen' => 'esteban-ocon.jpg',
            'historia' => 'Talentoso piloto francés, conocido por su férrea defensa en pista y capacidad de maximizar el rendimiento del auto. Ganador del GP de Hungría 2021, forma una sólida dupla francesa en Alpine junto a Gasly.'
        ],
        'fernando-alonso' => [
            'nombre' => 'FERNANDO ALONSO',
            'numero' => '14',
            'equipo' => 'Aston Martin',
            'equipo_clase' => 'astonmartin',
            'nacionalidad' => '🇪🇸 España',
            'anos_f1' => '22',
            'imagen' => 'fernando-alonso.jpg',
            'historia' => 'El veterano bicampeón del mundo. Un maestro de la estrategia y exprime el 110% de cualquier monoplaza que conduce. A sus 43 años, sigue demostrando que la edad es solo un número con actuaciones brillantes que desafían el tiempo.'
        ]
    ];

    // Busca al piloto, si no encuentra el nombre (o si entran desde el menú superior), muestra a Lance por defecto
    $piloto_seleccionado = $pilotos[$slug] ?? $pilotos['lance-stroll'];
    
    return view('pages.perfil-piloto', compact('piloto_seleccionado'));

})->name('perfil-piloto');
// --------------------------------------

Route::get('/reglamento', function () { return view('pages.reglamento'); })->name('reglamento');
Route::get('/galeria', function () { return view('pages.galeria'); })->name('galeria');
Route::get('/contacto', function () { return view('pages.contacto'); })->name('contacto');