@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold text-center text-white mb-5 mx-auto" style="max-width: 400px;">
        REGLAMENTO DE LA<br>FORMULA 1 (FIA)
    </h1>

    <section class="row justify-content-center mb-5">
        <div class="col-lg-10 col-xl-8">
            
            <article class="card bg-black border-0 rounded-0" style="min-height: 65vh;">
                
                <header class="card-header bg-transparent border-bottom border-secondary d-flex align-items-center p-4">
                    <div class="bg-secondary text-white rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 45px; height: 45px; font-size: 1.2rem;">
                        👤
                    </div>
                    <div>
                        <strong class="text-white d-block" style="font-size: 0.85rem;">REGULACIONES DE LA FIA 2025</strong>
                        <small class="text-muted" style="font-size: 0.75rem;">ACTUALIZACIÓN OFICIAL DE NORMATIVAS</small>
                    </div>
                </header>

                <div class="card-body p-4 p-md-5">
                    
                    <p class="text-muted mb-5" style="font-size: 0.85rem; line-height: 1.8; text-transform: uppercase;">
                        Nuevas regulaciones mecanicas, limite y de desarrollo para las escuderias, pilotos, patrocinadores, proveedores y los grandes premios. Requisitos que los recintos deben de cumplir.
                    </p>

                    <h3 class="h6 fw-bold text-white mb-3 border-bottom border-danger pb-2" style="display: inline-block;">1. REGULACIONES DEPORTIVAS</h3>
                    <ul class="text-muted mb-4" style="font-size: 0.85rem; line-height: 1.8;">
                        <li class="mb-2"><strong>Formato de Fin de Semana:</strong> Prácticas Libres, Clasificación (Q1, Q2, Q3) y la Carrera principal. Inclusión de formato Sprint en sedes seleccionadas.</li>
                        <li class="mb-2"><strong>Sistema de Puntuación:</strong> Puntos a los 10 primeros clasificados (25, 18, 15, 12, 10, 8, 6, 4, 2, 1) más 1 punto por vuelta rápida (si está en el Top 10).</li>
                        <li class="mb-2"><strong>Neumáticos:</strong> Uso obligatorio de al menos dos compuestos diferentes de neumáticos de seco durante la carrera.</li>
                    </ul>

                    <h3 class="h6 fw-bold text-white mb-3 border-bottom border-danger pb-2" style="display: inline-block;">2. REGULACIONES TÉCNICAS</h3>
                    <ul class="text-muted mb-4" style="font-size: 0.85rem; line-height: 1.8;">
                        <li class="mb-2"><strong>Aerodinámica:</strong> Uso del "efecto suelo" para generar carga aerodinámica y reducir el aire sucio, favoreciendo los adelantamientos en pista.</li>
                        <li class="mb-2"><strong>Motor:</strong> Unidades de potencia V6 turbo híbridos de 1.6 litros. Enfoque hacia el uso de combustibles 100% sostenibles.</li>
                        <li class="mb-2"><strong>Peso y Seguridad:</strong> Peso mínimo de 798 kg por monoplaza. Uso obligatorio de dispositivos de supervivencia como el "Halo".</li>
                    </ul>

                    <h3 class="h6 fw-bold text-white mb-3 border-bottom border-danger pb-2" style="display: inline-block;">3. REGULACIONES FINANCIERAS</h3>
                    <ul class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.8;">
                        <li class="mb-2"><strong>Límite de Costos (Cost Cap):</strong> Presupuesto máximo anual estricto para nivelar la competencia entre todas las escuderías.</li>
                        <li><strong>Excepciones:</strong> Los salarios de los pilotos y de los tres directivos mejor pagados del equipo no entran dentro de este límite presupuestario.</li>
                    </ul>

                </div>

            </article>
            
        </div>
    </section>
@endsection