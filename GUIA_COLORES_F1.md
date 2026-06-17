# 🎨 Guía del Sistema de Colores F1 2025

## 📋 Índice
1. [Variables CSS Disponibles](#variables-css-disponibles)
2. [Clases de Utilidad](#clases-de-utilidad)
3. [Ejemplos de Uso](#ejemplos-de-uso)
4. [Componentes Especiales](#componentes-especiales)
5. [Colores de Equipos](#colores-de-equipos)

---

## 🎨 Variables CSS Disponibles

### Colores Principales F1
```css
--f1-red: #E10600;           /* Rojo oficial F1 */
--f1-red-dark: #B30500;      /* Rojo oscuro hover */
--f1-red-light: #FF1E00;     /* Rojo claro acentos */
```

### Colores de Fondo
```css
--f1-black: #15151E;         /* Negro principal */
--f1-black-light: #1F1F27;   /* Negro cards */
--f1-black-pure: #000000;    /* Negro puro navbar */
```

### Colores de Texto
```css
--f1-white: #FFFFFF;         /* Blanco principal */
--f1-gray: #38383F;          /* Gris medio */
--f1-gray-light: #6C757D;    /* Gris claro */
--f1-gray-dark: #212529;     /* Gris oscuro */
```

### Colores de Acento
```css
--f1-gold: #FFD700;          /* Dorado (1er lugar) */
--f1-silver: #C0C0C0;        /* Plata (2do lugar) */
--f1-bronze: #CD7F32;        /* Bronce (3er lugar) */
```

---

## 🛠️ Clases de Utilidad

### Fondos
```html
<div class="bg-f1-red">Fondo rojo F1</div>
<div class="bg-f1-black">Fondo negro principal</div>
<div class="bg-f1-black-light">Fondo negro claro (cards)</div>
<div class="bg-f1-gray">Fondo gris</div>
```

### Textos
```html
<p class="text-f1-red">Texto rojo F1</p>
<p class="text-f1-white">Texto blanco</p>
<p class="text-f1-gray">Texto gris</p>
<p class="text-f1-gold">Texto dorado</p>
```

### Bordes
```html
<div class="border border-f1-red">Borde rojo</div>
<div class="border-top-red">Borde superior rojo</div>
<div class="border-bottom-red">Borde inferior rojo</div>
<div class="border-left-red">Borde izquierdo rojo</div>
```

---

## 💡 Ejemplos de Uso

### 1. Card de Piloto con Borde de Equipo
```html
<div class="card card-piloto border-team-ferrari">
    <img src="piloto.jpg" class="card-img-top" alt="Piloto">
    <div class="card-body">
        <h3 class="text-f1-white">CARLOS SAINZ</h3>
        <span class="badge bg-team-ferrari">Ferrari</span>
    </div>
</div>
```

### 2. Botones con Estilo F1
```html
<!-- Botón primario -->
<button class="btn btn-primary">VER DETALLES</button>

<!-- Botón outline -->
<button class="btn btn-outline-primary">MÁS INFO</button>

<!-- Botón outline claro -->
<button class="btn btn-outline-light">CONTACTO</button>
```

### 3. Badges de Posición
```html
<span class="badge badge-position badge-p1">1</span>
<span class="badge badge-position badge-p2">2</span>
<span class="badge badge-position badge-p3">3</span>
```

### 4. Card con Efecto Hover
```html
<div class="card hover-lift">
    <img src="gp.jpg" class="card-img-top" alt="GP">
    <div class="card-body">
        <h3>GP DE AUSTRALIA</h3>
        <p class="text-f1-gray">14-16 Marzo 2025</p>
    </div>
</div>
```

### 5. Sección Hero
```html
<section class="hero-section">
    <div class="container">
        <h1 class="text-f1-white text-shadow-red">TEMPORADA 2025</h1>
        <p class="text-f1-gray">La emoción de la Fórmula 1</p>
    </div>
</section>
```

### 6. Contador Regresivo
```html
<div class="d-flex gap-3">
    <div class="countdown-box">
        <div class="countdown-number">15</div>
        <div class="countdown-label">Días</div>
    </div>
    <div class="countdown-box">
        <div class="countdown-number">08</div>
        <div class="countdown-label">Horas</div>
    </div>
    <div class="countdown-box">
        <div class="countdown-number">45</div>
        <div class="countdown-label">Minutos</div>
    </div>
</div>
```

### 7. Tarjeta de Estadística
```html
<div class="stat-card">
    <div class="stat-number">245</div>
    <div class="stat-label">Puntos Líder</div>
</div>
```

### 8. Tabla de Clasificación
```html
<table class="table clasificacion-table">
    <thead>
        <tr>
            <th>POS</th>
            <th>PILOTO</th>
            <th>EQUIPO</th>
            <th>PUNTOS</th>
        </tr>
    </thead>
    <tbody>
        <tr class="position-1">
            <td><span class="badge badge-p1">1</span></td>
            <td>Max Verstappen</td>
            <td><span class="badge bg-team-redbull">Red Bull</span></td>
            <td>245</td>
        </tr>
        <tr class="position-2">
            <td><span class="badge badge-p2">2</span></td>
            <td>Lando Norris</td>
            <td><span class="badge bg-team-mclaren">McLaren</span></td>
            <td>198</td>
        </tr>
    </tbody>
</table>
```

### 9. Divisor Decorativo
```html
<div class="divider-red"></div>
```

### 10. Animaciones
```html
<div class="fade-in-up">Aparece con fade</div>
<div class="slide-in-left">Desliza desde la izquierda</div>
```

---

## 🏎️ Colores de Equipos

### Red Bull Racing
```html
<div class="bg-team-redbull text-white">Red Bull</div>
<span class="badge bg-team-redbull">RB</span>
<div class="border border-team-redbull">Borde Red Bull</div>
```

### Ferrari
```html
<div class="bg-team-ferrari text-white">Ferrari</div>
<span class="badge bg-team-ferrari">Ferrari</span>
<div class="border border-team-ferrari">Borde Ferrari</div>
```

### Mercedes
```html
<div class="bg-team-mercedes text-white">Mercedes</div>
<span class="badge bg-team-mercedes">Mercedes</span>
<div class="border border-team-mercedes">Borde Mercedes</div>
```

### McLaren
```html
<div class="bg-team-mclaren text-white">McLaren</div>
<span class="badge bg-team-mclaren">McLaren</span>
<div class="border border-team-mclaren">Borde McLaren</div>
```

### Aston Martin
```html
<div class="bg-team-astonmartin text-white">Aston Martin</div>
<span class="badge bg-team-astonmartin">Aston Martin</span>
<div class="border border-team-astonmartin">Borde Aston Martin</div>
```

### Alpine
```html
<div class="bg-team-alpine text-white">Alpine</div>
<span class="badge bg-team-alpine">Alpine</span>
<div class="border border-team-alpine">Borde Alpine</div>
```

### Williams
```html
<div class="bg-team-williams text-white">Williams</div>
<span class="badge bg-team-williams">Williams</span>
<div class="border border-team-williams">Borde Williams</div>
```

### Haas
```html
<div class="bg-team-haas text-dark">Haas</div>
<span class="badge bg-team-haas text-dark">Haas</span>
<div class="border border-team-haas">Borde Haas</div>
```

### Sauber
```html
<div class="bg-team-sauber text-white">Sauber</div>
<span class="badge bg-team-sauber">Sauber</span>
<div class="border border-team-sauber">Borde Sauber</div>
```

### RB (AlphaTauri)
```html
<div class="bg-team-rb text-white">RB</div>
<span class="badge bg-team-rb">RB</span>
<div class="border border-team-rb">Borde RB</div>
```

---

## 🎯 Componentes Especiales

### Card de GP con Efecto
```html
<div class="card card-gp">
    <img src="gp-australia.jpg" class="card-img-top" alt="GP Australia">
    <div class="card-body">
        <h3>GP DE AUSTRALIA</h3>
        <p class="text-f1-gray">14-16 Marzo 2025</p>
    </div>
</div>
```

### Gradientes
```html
<div class="gradient-red p-4">Gradiente rojo</div>
<div class="gradient-dark p-4">Gradiente oscuro</div>
```

### Efectos Especiales
```html
<div class="box-shadow-red">Sombra roja</div>
<div class="glow-red">Resplandor rojo</div>
<h1 class="text-shadow-red">Texto con sombra roja</h1>
```

### Loading Spinner
```html
<div class="d-flex justify-content-center">
    <div class="f1-spinner"></div>
</div>
```

---

## 📱 Responsive

El sistema de colores es completamente responsive. En móviles:
- Los títulos se reducen automáticamente
- Los contadores se adaptan
- La navegación se optimiza

---

## 🚀 Mejores Prácticas

1. **Usa las variables CSS** en lugar de colores hardcodeados
2. **Combina clases de utilidad** para efectos complejos
3. **Mantén la consistencia** usando siempre los mismos colores para los mismos elementos
4. **Aprovecha los efectos hover** para mejorar la interactividad
5. **Usa badges de equipos** para identificar rápidamente a pilotos y escuderías

---

## 📝 Notas Importantes

- Todos los estilos están en `public/css/f1-theme.css`
- Los estilos base están en `resources/views/components/header.blade.php`
- El sistema usa variables CSS para fácil personalización
- Compatible con Bootstrap 5.3.2
- Optimizado para modo oscuro

---

## 🔧 Personalización

Para cambiar un color globalmente, modifica la variable en `:root`:

```css
:root {
    --f1-red: #TU_COLOR_AQUI;
}
```

Todos los elementos que usen esa variable se actualizarán automáticamente.

---

## 📞 Soporte

Si necesitas agregar más colores o componentes, edita:
- `public/css/f1-theme.css` - Para nuevos estilos
- `resources/views/components/header.blade.php` - Para estilos base

---

**¡Disfruta creando tu sitio F1 2025! 🏎️💨**