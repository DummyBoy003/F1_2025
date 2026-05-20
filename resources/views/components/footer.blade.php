<footer class="container py-5 mt-5 border-top border-secondary mt-auto">
    <div class="row text-muted" style="font-size: 0.85rem;">
        
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ asset('img/logo-f1.png') }}" alt="F1 Logo" style="height: 25px; object-fit: contain;" class="mb-3">
            <p class="mb-1 text-white fw-bold">PROYECTO F1 &copy; 2025</p>
            <p class="mb-2">Todos los derechos reservados.</p>
            
            <p class="mb-4 mt-3">
             <a href="{{ route('faq') }}" class="text-decoration-none fw-bold" style="color: #e10600; font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#e10600'">
                 👉 Ir a Preguntas Frecuentes (FAQ)
             </a>
            </p>

            <p style="font-size: 0.7rem; color: #6c757d; max-width: 450px;">* Este es un proyecto web no oficial creado con fines educativos. No está afiliado con las empresas del grupo Formula 1.</p>
        </div>

        <div class="col-md-6 d-flex flex-column align-items-md-end justify-content-md-center">
            <h5 class="text-white fw-bold mb-3" style="font-size: 0.85rem; letter-spacing: 1px;">SÍGUENOS</h5>
            
            <div class="d-flex gap-3 mb-4">
                <a href="#" class="text-muted text-decoration-none" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#e10600'" onmouseout="this.style.color='#6c757d'">📱</a>
                <a href="#" class="text-muted text-decoration-none" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#e10600'" onmouseout="this.style.color='#6c757d'">🐦</a>
                <a href="#" class="text-muted text-decoration-none" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#e10600'" onmouseout="this.style.color='#6c757d'">▶️</a>
            </div>

            <a href="{{ route('contacto') }}" class="btn btn-outline-light btn-sm rounded-0 fw-bold px-4 py-2" style="font-size: 0.75rem; letter-spacing: 1px;">
                FORMULARIO DE CONTACTO
            </a>
        </div>

    </div>
</footer>