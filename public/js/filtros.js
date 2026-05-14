// 1. Enlace a componentes mediante ById
let buscadorGlobal = document.getElementById("buscador-global");

let chkTodos = document.getElementById("chk-todos");

let chkCarreras = document.getElementById("chk-carreras");
let chkPilotos = document.getElementById("chk-pilotos");
let chkEscuderias = document.getElementById("chk-escuderias");

let chkEuropa = document.getElementById("chk-europa");
let chkAmerica = document.getElementById("chk-america");
let chkAsia = document.getElementById("chk-asia");

let chkActivo = document.getElementById("chk-activo");
let chkHistorico = document.getElementById("chk-historico");
let chkRumor = document.getElementById("chk-rumor");

// 2. Enlace a divisiones mediante ClassName
let listaElementos = document.getElementsByClassName("item-directorio");

// 3. Funciones explícitas para cada acción

// Función para la barra de búsqueda (Busca por NOMBRE DE CLASE)
function buscarPorTeclado(evento) {
    let textoBuscado = evento.target.value.toLowerCase().trim();
    
    // Si escribe algo, reseteamos los filtros visualmente
    if(textoBuscado != "") {
        chkTodos.checked = true;
        chkCarreras.checked = false; chkPilotos.checked = false; chkEscuderias.checked = false;
        chkEuropa.checked = false; chkAmerica.checked = false; chkAsia.checked = false;
        chkActivo.checked = false; chkHistorico.checked = false; chkRumor.checked = false;
    }

    for (let i = 0; i < listaElementos.length; i++) {
        let elementoActual = listaElementos[i];
        
        // REGLA CUMPLIDA: Leemos las clases del elemento, NO el texto interno
        let clasesDelElemento = elementoActual.className.toLowerCase();

        // Buscamos si lo que escribió coincide con alguna clase (ej. 'prod-ferrari')
        if (clasesDelElemento.indexOf(textoBuscado) > -1) {
            elementoActual.classList.remove("d-none");
        } else {
            elementoActual.classList.add("d-none");
        }
    }
}

// Función cuando se hace clic en "Ver Todos"
function clickEnTodos() {
    if (chkTodos.checked == true) {
        chkCarreras.checked = false; chkPilotos.checked = false; chkEscuderias.checked = false;
        chkEuropa.checked = false; chkAmerica.checked = false; chkAsia.checked = false;
        chkActivo.checked = false; chkHistorico.checked = false; chkRumor.checked = false;
    }
    ejecutarFiltroAvanzado();
}

// Función cuando se hace clic en cualquier otro checkbox
function clickEnFiltroNormal() {
    chkTodos.checked = false; // Quitamos el check de "Todos"
    buscadorGlobal.value = ""; // Limpiamos la barra de búsqueda
    ejecutarFiltroAvanzado();
}

// Lógica principal solicitada por la rúbrica
function ejecutarFiltroAvanzado() {
    let nadaSeleccionado = false;
    if (chkCarreras.checked == false && chkPilotos.checked == false && chkEscuderias.checked == false &&
        chkEuropa.checked == false && chkAmerica.checked == false && chkAsia.checked == false &&
        chkActivo.checked == false && chkHistorico.checked == false && chkRumor.checked == false) {
        nadaSeleccionado = true;
    }

    // Ocultar todos primero (Regla de la rúbrica)
    for (let i = 0; i < listaElementos.length; i++) {
        listaElementos[i].classList.add("d-none"); 
    }

    // Si está "Todos" o nada seleccionado, mostrar todo
    if (chkTodos.checked == true || nadaSeleccionado == true) {
        for (let i = 0; i < listaElementos.length; i++) {
            listaElementos[i].classList.remove("d-none");
        }
        if (nadaSeleccionado == true) { chkTodos.checked = true; }
        return;
    }

    // Validar tarjeta por tarjeta (Inclusión y Exclusión)
    for (let i = 0; i < listaElementos.length; i++) {
        let itemActual = listaElementos[i];

        // INCLUSIÓN: Categoría Tipo
        let pasaTipo = false;
        let hayFiltroTipo = chkCarreras.checked || chkPilotos.checked || chkEscuderias.checked;
        if (hayFiltroTipo == false) {
            pasaTipo = true; 
        } else {
            if (chkCarreras.checked == true && itemActual.classList.contains("tipo-carreras")) pasaTipo = true;
            if (chkPilotos.checked == true && itemActual.classList.contains("tipo-pilotos")) pasaTipo = true;
            if (chkEscuderias.checked == true && itemActual.classList.contains("tipo-escuderias")) pasaTipo = true;
        }

        // INCLUSIÓN: Categoría Zona
        let pasaZona = false;
        let hayFiltroZona = chkEuropa.checked || chkAmerica.checked || chkAsia.checked;
        if (hayFiltroZona == false) {
            pasaZona = true;
        } else {
            if (chkEuropa.checked == true && itemActual.classList.contains("zona-europa")) pasaZona = true;
            if (chkAmerica.checked == true && itemActual.classList.contains("zona-america")) pasaZona = true;
            if (chkAsia.checked == true && itemActual.classList.contains("zona-asia")) pasaZona = true;
        }

        // INCLUSIÓN: Categoría Estado
        let pasaEstado = false;
        let hayFiltroEstado = chkActivo.checked || chkHistorico.checked || chkRumor.checked;
        if (hayFiltroEstado == false) {
            pasaEstado = true;
        } else {
            if (chkActivo.checked == true && itemActual.classList.contains("estado-activo")) pasaEstado = true;
            if (chkHistorico.checked == true && itemActual.classList.contains("estado-historico")) pasaEstado = true;
            if (chkRumor.checked == true && itemActual.classList.contains("estado-rumor")) pasaEstado = true;
        }

        // EXCLUSIÓN: Solo se muestra si pasa las 3 categorías (AND)
        if (pasaTipo == true && pasaZona == true && pasaEstado == true) {
            itemActual.classList.remove("d-none"); 
        }
    }
}

// 4. Agregar eventos mediante addEventListener
buscadorGlobal.addEventListener("keyup", buscarPorTeclado);

chkTodos.addEventListener("change", clickEnTodos);

chkCarreras.addEventListener("change", clickEnFiltroNormal);
chkPilotos.addEventListener("change", clickEnFiltroNormal);
chkEscuderias.addEventListener("change", clickEnFiltroNormal);

chkEuropa.addEventListener("change", clickEnFiltroNormal);
chkAmerica.addEventListener("change", clickEnFiltroNormal);
chkAsia.addEventListener("change", clickEnFiltroNormal);

chkActivo.addEventListener("change", clickEnFiltroNormal);
chkHistorico.addEventListener("change", clickEnFiltroNormal);
chkRumor.addEventListener("change", clickEnFiltroNormal);

// ==============================================================
// EVENTOS DE MOUSE (HOVER CON JAVASCRIPT)
// ==============================================================

// 1. Enlace a divisiones mediante ClassName
// Obtenemos todas las divisiones que tengan la clase "card"
let tarjetasDeProducto = document.getElementsByClassName("card");

// 2. Funciones explícitas para la acción
function aplicarResalte(evento) {
    let tarjeta = evento.currentTarget;

    // Incrementar el tamaño en un 5% usando style.transform
    tarjeta.style.transform = "scale(1.05)";
    tarjeta.style.transition = "all 0.3s ease";

    // Quitar borde original y poner borde rojo F1 (Bootstrap: border-danger)
    tarjeta.classList.remove('border-secondary');
    tarjeta.classList.add('border-danger');
    
    // Para que el borde se note más, le damos más grosor
    tarjeta.classList.add('border-2'); 

    // Agregar sombra tenue y redondear esquinas usando clases del Framework
    tarjeta.classList.add('shadow-lg');
    tarjeta.classList.add('rounded-4');
}

function quitarResalte(evento) {
    let tarjeta = evento.currentTarget;

    // Restaurar la escala original
    tarjeta.style.transform = "scale(1)";

    // Restaurar el color del borde original
    tarjeta.classList.remove('border-danger');
    tarjeta.classList.remove('border-2');
    tarjeta.classList.add('border-secondary');

    // Eliminar la sombra y las esquinas redondeadas
    tarjeta.classList.remove('shadow-lg');
    tarjeta.classList.remove('rounded-4');
}

// 3. Agregar evento mediante addEventListener
for (let i = 0; i < tarjetasDeProducto.length; i++) {
    tarjetasDeProducto[i].addEventListener("mouseover", aplicarResalte);
    tarjetasDeProducto[i].addEventListener("mouseout", quitarResalte);
}

// ==============================================================
// NUEVA ACTIVIDAD: 3 TRANSICIONES Y ANIMACIONES EXTRAS 
// ==============================================================

// --------------------------------------------------------------
// EFECTO 1: Cambio de Tema en el Buscador (Por ID)
// --------------------------------------------------------------
// Utilizamos 'buscadorGlobal' que ya fue declarado al inicio
function animarBuscadorIn(evento) {
    let buscador = evento.currentTarget;
    buscador.style.transition = "all 0.4s ease"; 
    
    buscador.classList.remove("bg-white", "text-dark");
    buscador.classList.add("bg-dark", "text-white", "border-danger", "border-3");
}

function animarBuscadorOut(evento) {
    let buscador = evento.currentTarget;
    
    buscador.classList.remove("bg-dark", "text-white", "border-danger", "border-3");
    buscador.classList.add("bg-white", "text-dark");
}

buscadorGlobal.addEventListener("mouseover", animarBuscadorIn);
buscadorGlobal.addEventListener("mouseout", animarBuscadorOut);


// --------------------------------------------------------------
// EFECTO 2: Deslizamiento de los Filtros (Por ClassName)
// --------------------------------------------------------------
let filasFiltros = document.getElementsByClassName("form-check");

function deslizarFiltroIn(evento) {
    let fila = evento.currentTarget;
    fila.style.transition = "all 0.3s ease";
    fila.classList.add("ps-4", "bg-secondary", "rounded");
}

function deslizarFiltroOut(evento) {
    let fila = evento.currentTarget;
    fila.classList.remove("ps-4", "bg-secondary", "rounded");
}

for (let i = 0; i < filasFiltros.length; i++) {
    filasFiltros[i].addEventListener("mouseover", deslizarFiltroIn);
    filasFiltros[i].addEventListener("mouseout", deslizarFiltroOut);
}


// --------------------------------------------------------------
// EFECTO 3: Estiramiento de las Etiquetas (Por ClassName)
// --------------------------------------------------------------
let etiquetasCategorias = document.getElementsByClassName("badge");

function estirarEtiquetaIn(evento) {
    let etiqueta = evento.currentTarget;
    etiqueta.style.transition = "all 0.3s ease";
    etiqueta.classList.add("px-4", "rounded-pill", "fs-6");
}

function estirarEtiquetaOut(evento) {
    let etiqueta = evento.currentTarget;
    etiqueta.classList.remove("px-4", "rounded-pill", "fs-6");
}

for (let i = 0; i < etiquetasCategorias.length; i++) {
    etiquetasCategorias[i].addEventListener("mouseover", estirarEtiquetaIn);
    etiquetasCategorias[i].addEventListener("mouseout", estirarEtiquetaOut);
}