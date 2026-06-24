@extends('layouts.app')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="fw-bold mb-5 text-center text-f1-white text-uppercase">Preguntas Frecuentes</h1>

                <div class="accordion" id="faqAccordion">
                    
                    {{-- Pregunta 1 --}}
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1" style="background-color: var(--f1-black-light); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                ¿Cuándo inicia y termina la temporada 2025?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background-color: var(--f1-gray); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                La temporada 2025 arranca con el Gran Premio de Australia en marzo y concluye con el Gran Premio de Abu Dabi en diciembre, abarcando un total de 24 carreras.
                            </div>
                        </div>
                    </div>

                    {{-- Pregunta 2 --}}
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2" style="background-color: var(--f1-black-light); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                ¿Qué es el formato Sprint?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background-color: var(--f1-gray); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                Es una carrera corta de aproximadamente 100 km que se realiza los sábados en ciertos Grandes Premios. No tiene paradas en boxes obligatorias y otorga puntos extra a los primeros 8 pilotos.
                            </div>
                        </div>
                    </div>

                    {{-- Pregunta 3 --}}
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3" style="background-color: var(--f1-black-light); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                ¿Qué incluye un paquete oficial de F1 Experiences?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background-color: var(--f1-gray); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                Los paquetes varían según el nivel, pero generalmente incluyen asientos en tribuna premium o acceso al Paddock Club, caminatas exclusivas por el pit lane, y encuentros con pilotos o leyendas del deporte.
                            </div>
                        </div>
                    </div>

                    {{-- Pregunta 4 --}}
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4" style="background-color: var(--f1-black-light); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                ¿Están incluidos los vuelos y el alojamiento en mis entradas?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background-color: var(--f1-gray); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                No. Los paquetes de entradas estándar y VIP solo incluyen el acceso al circuito y las actividades descritas. Sin embargo, ofrecemos complementos de hotel para reservas específicas según disponibilidad.
                            </div>
                        </div>
                    </div>

                    {{-- Pregunta 5 --}}
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5" style="background-color: var(--f1-black-light); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                ¿Cuándo y cómo recibiré mis entradas para el Gran Premio?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background-color: var(--f1-gray); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                Las entradas de la Fórmula 1 son 100% digitales. Se enviarán a la dirección de correo electrónico registrada aproximadamente 1 a 3 semanas antes del evento, junto con un itinerario detallado.
                            </div>
                        </div>
                    </div>

                    {{-- Pregunta 6 --}}
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6" style="background-color: var(--f1-black-light); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                ¿Puedo llevar mi cámara profesional al circuito?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background-color: var(--f1-gray); color: var(--f1-white); border-left: 4px solid var(--f1-red);">
                                Se permite el ingreso de cámaras fotográficas para uso personal, pero están estrictamente prohibidos los trípodes, drones y el equipo de grabación de video profesional sin acreditación de prensa.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        .accordion-button:not(.collapsed) {
            background-color: var(--f1-red) !important;
            color: var(--f1-white) !important;
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(225, 6, 0, 0.25);
        }

        .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .accordion-button:hover {
            background-color: var(--f1-red) !important;
            color: var(--f1-white) !important;
        }
    </style>
@endsection
