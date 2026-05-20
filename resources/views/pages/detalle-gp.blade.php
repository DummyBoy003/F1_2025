@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold text-white mb-4">Detalle del GP</h1>

    <section class="row">
        <div class="col-lg-8">
            
            <article class="card bg-black border-0 rounded-0 mb-4">
                
                <header class="card-header bg-transparent border-bottom border-secondary d-flex align-items-center p-3">
                    <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px; font-size: 1.2rem;">
                        👤
                    </div>
                    <div>
                        <strong class="text-white d-block text-uppercase" style="font-size: 0.85rem;">{{ $gp_seleccionado['nombre'] }} - {{ $gp_seleccionado['circuito'] }}</strong>
                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">{{ $gp_seleccionado['fecha'] }}</small>
                    </div>
                </header>

                <div class="card-body p-4">
                    <p class="text-muted mb-4" style="font-size: 0.85rem; line-height: 1.6;">
                        {{ $gp_seleccionado['descripcion'] }}
                    </p>

                    <div class="mx-auto mb-5 d-flex justify-content-center overflow-hidden" style="height: 250px; width: 100%; background-color: #111;">
                        <img src="{{ asset('img/' . $gp_seleccionado['imagen_principal']) }}" class="img-fluid w-100" style="object-fit: cover; object-position: center;" alt="{{ $gp_seleccionado['nombre'] }}">
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-start mt-4">
                        <div class="bg-white d-flex justify-content-center align-items-center me-4 mb-3 mb-md-0" style="min-width: 160px; height: 100px;">
                            <img src="{{ asset('img/' . $gp_seleccionado['imagen_principal']) }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Miniatura GP">
                        </div>
                        <div>
                            <h3 class="h6 fw-bold text-white mb-2 text-uppercase">{{ $gp_seleccionado['noticia_titulo'] }}</h3>
                            <p class="text-muted mb-2" style="font-size: 0.8rem;">{{ $gp_seleccionado['noticia_desc'] }}</p>
                            <a href="#" class="text-white fw-bold text-decoration-none" style="font-size: 0.8rem;">Read more</a>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card bg-black border-0 rounded-0 mb-4">
                
                <header class="card-header bg-transparent border-bottom border-secondary d-flex align-items-center p-3">
                    <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px; font-size: 1.2rem;">
                        👤
                    </div>
                    <div>
                        <strong class="text-white d-block" style="font-size: 0.85rem;">INFORMACION DEL PADDOCK</strong>
                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">{{ $gp_seleccionado['nombre'] }}</small>
                    </div>
                </header>

                <div class="card-body p-4">
                    <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.6;">
                        {{ $gp_seleccionado['info_extra'] }}
                    </p>
                </div>
            </article>

        </div>
    </section>
@endsection