<!DOCTYPE html>
<html lang="es">
<head>
    @include('components.header')
</head>
<body class="d-flex flex-column min-vh-100">

    @include('components.navbar')

    <main class="container py-5 flex-grow-1">
        @yield('contenido')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>