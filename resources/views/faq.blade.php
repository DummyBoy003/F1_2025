@extends('layouts.app')

@section('contenido')
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="max-w-3xl mx-auto my-10 p-6 bg-gray-900 rounded-lg shadow-xl">
        <h2 class="text-3xl font-bold text-white mb-8 text-center uppercase tracking-wide">Preguntas Frecuentes</h2>

        <div class="space-y-4">
            <div>
                <div id="pregunta1" class="bg-gray-800 text-white font-semibold p-4 rounded cursor-pointer hover:bg-red-600 transition-colors duration-200">
                    ¿Cuándo inicia y termina la temporada 2025?
                </div>
                <div id="respuesta1" class="hidden bg-gray-200 text-gray-900 p-4 rounded-b mt-1 border-l-4 border-red-600">
                    La temporada 2025 arranca con el Gran Premio de Australia en marzo y concluye con el Gran Premio de Abu Dabi en diciembre, abarcando un total de 24 carreras.
                </div>
            </div>

            <div>
                <div id="pregunta2" class="bg-gray-800 text-white font-semibold p-4 rounded cursor-pointer hover:bg-red-600 transition-colors duration-200">
                    ¿Qué es el formato Sprint?
                </div>
                <div id="respuesta2" class="hidden bg-gray-200 text-gray-900 p-4 rounded-b mt-1 border-l-4 border-red-600">
                    Es una carrera corta de aproximadamente 100 km que se realiza los sábados en ciertos Grandes Premios. No tiene paradas en boxes obligatorias y otorga puntos extra a los primeros 8 pilotos.
                </div>
            </div>

            <div>
                <div id="pregunta3" class="bg-gray-800 text-white font-semibold p-4 rounded cursor-pointer hover:bg-red-600 transition-colors duration-200">
                    ¿Qué incluye un paquete oficial de F1 Experiences?
                </div>
                <div id="respuesta3" class="hidden bg-gray-200 text-gray-900 p-4 rounded-b mt-1 border-l-4 border-red-600">
                    Los paquetes varían según el nivel, pero generalmente incluyen asientos en tribuna premium o acceso al Paddock Club, caminatas exclusivas por el pit lane, y encuentros con pilotos o leyendas del deporte.
                </div>
            </div>

            <div>
                <div id="pregunta4" class="bg-gray-800 text-white font-semibold p-4 rounded cursor-pointer hover:bg-red-600 transition-colors duration-200">
                    ¿Están incluidos los vuelos y el alojamiento en mis entradas?
                </div>
                <div id="respuesta4" class="hidden bg-gray-200 text-gray-900 p-4 rounded-b mt-1 border-l-4 border-red-600">
                    No. Los paquetes de entradas estándar y VIP solo incluyen el acceso al circuito y las actividades descritas. Sin embargo, ofrecemos complementos de hotel para reservas específicas según disponibilidad.
                </div>
            </div>

            <div>
                <div id="pregunta5" class="bg-gray-800 text-white font-semibold p-4 rounded cursor-pointer hover:bg-red-600 transition-colors duration-200">
                    ¿Cuándo y cómo recibiré mis entradas para el Gran Premio?
                </div>
                <div id="respuesta5" class="hidden bg-gray-200 text-gray-900 p-4 rounded-b mt-1 border-l-4 border-red-600">
                    Las entradas de la Fórmula 1 son 100% digitales. Se enviarán a la dirección de correo electrónico registrada aproximadamente 1 a 3 semanas antes del evento, junto con un itinerario detallado.
                </div>
            </div>

            <div>
                <div id="pregunta6" class="bg-gray-800 text-white font-semibold p-4 rounded cursor-pointer hover:bg-red-600 transition-colors duration-200">
                    ¿Puedo llevar mi cámara profesional al circuito?
                </div>
                <div id="respuesta6" class="hidden bg-gray-200 text-gray-900 p-4 rounded-b mt-1 border-l-4 border-red-600">
                    Se permite el ingreso de cámaras fotográficas para uso personal, pero están estrictamente prohibidos los trípodes, drones y el equipo de grabación de video profesional sin acreditación de prensa.
                </div>
            </div>
        </div>
    </div>

    <script>
        // 1. Obtener elementos
        let p1 = document.getElementById("pregunta1"); let r1 = document.getElementById("respuesta1");
        let p2 = document.getElementById("pregunta2"); let r2 = document.getElementById("respuesta2");
        let p3 = document.getElementById("pregunta3"); let r3 = document.getElementById("respuesta3");
        let p4 = document.getElementById("pregunta4"); let r4 = document.getElementById("respuesta4");
        let p5 = document.getElementById("pregunta5"); let r5 = document.getElementById("respuesta5");
        let p6 = document.getElementById("pregunta6"); let r6 = document.getElementById("respuesta6");

        // 2. Función de alternancia (toggle) sin usar style.display
        function toggle(respuesta) {
            respuesta.classList.toggle("hidden");
        }

        // 3. Asignación de Eventos
        p1.addEventListener("click", function() { toggle(r1); });
        p2.addEventListener("click", function() { toggle(r2); });
        p3.addEventListener("click", function() { toggle(r3); });
        p4.addEventListener("click", function() { toggle(r4); });
        p5.addEventListener("click", function() { toggle(r5); });
        p6.addEventListener("click", function() { toggle(r6); });
    </script>
@endsection