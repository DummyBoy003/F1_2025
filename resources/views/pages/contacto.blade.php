@extends('layouts.app')

@section('contenido')
    <section class="row justify-content-center my-5">
        <div class="col-md-8 col-lg-6">
            
            <h1 class="fw-bold mb-5 text-white text-center">CONTACTO</h1>

            <div class="alert alert-success d-none text-center fw-bold rounded-0 mb-4" role="alert">
                ¡Mensaje enviado con éxito!
            </div>

            <form>
                
                <div class="mb-4 d-flex flex-column flex-md-row align-items-md-center">
                    <label class="text-white mb-1 mb-md-0" style="width: 250px; font-size: 0.85rem;">NOMBRE:</label>
                    <input type="text" class="form-control bg-white text-dark p-2" required>
                </div>

                <div class="mb-4 d-flex flex-column flex-md-row align-items-md-center">
                    <label class="text-white mb-1 mb-md-0" style="width: 250px; font-size: 0.85rem;">CORREO:</label>
                    <input type="email" class="form-control bg-white text-dark p-2" required>
                </div>

                <div class="mb-4 d-flex flex-column flex-md-row align-items-md-center">
                    <label class="text-white mb-1 mb-md-0" style="width: 250px; font-size: 0.85rem;">NUMERO DE TELEFONO:</label>
                    <input type="tel" class="form-control bg-white text-dark p-2" required>
                </div>

                <div class="mb-4 d-flex flex-column flex-md-row align-items-md-center">
                    <label class="text-white mb-1 mb-md-0" style="width: 250px; font-size: 0.85rem;">MOTIVO:</label>
                    <input type="text" class="form-control bg-white text-dark p-2" required>
                </div>

                <div class="mb-5 d-flex flex-column flex-md-row align-items-md-start mt-5">
                    <label class="text-white mb-1 mb-md-0 pt-md-2" style="width: 250px; font-size: 0.85rem;">DEJA UN MENSAJE:</label>
                    <textarea class="form-control bg-white text-dark p-2" rows="4" required></textarea>
                </div>

                <div class="text-center mt-5 pt-4">
                    <button type="reset" class="btn btn-primary w-75 py-3 fw-bold rounded-0" style="font-size: 0.9rem; letter-spacing: 1px;">
                        ENVIAR
                    </button>
                </div>
                
            </form>

        </div>
    </section>
@endsection