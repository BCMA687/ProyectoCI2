<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title mb-4 text-center">Iniciar Sesión</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Recuérdame</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="mt-3 text-center">
                            <a href="{{ route('register') }}">¿No tienes una cuenta? Regístrate</a></div>
                        <div class="mt-3 text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            emailInput.focus();
        });
    </script>
    <script>
        @if ($errors->any())
            alert('Por favor, corrige los errores en el formulario.');
        @endif
        </script>
    <script>
        @if (session('status'))
            alert('{{ session('status') }}');
        @endif
    </script>
</body>
</html>
