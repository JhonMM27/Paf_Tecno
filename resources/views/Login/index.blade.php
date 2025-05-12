<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System Pro - Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Iconos de Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo-container">
                    <div class="logo-icon">
                        <i class='bx bx-store'></i>
                    </div>
                </div>
                <h1>POS System Pro</h1>
                <p>Ingrese sus credenciales para continuar</p>
            </div>

            <div class="login-form">
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <div class="input-container">
                            <i class='bx bx-user input-icon'></i>
                            <input type="email" id="username" name="email" placeholder="Ingrese su correo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <div class="input-container">
                            <i class='bx bx-lock-alt input-icon'></i>
                            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
                            <i class='bx bx-show password-toggle' id="togglePassword"></i>
                        </div>
                    </div>


                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember">
                            <label for="remember">Recordarme</label>
                        </div>
                        <a href="#" class="forgot-password">¿Olvidó su contraseña?</a>
                    </div>

                    <button type="submit" class="login-button" id="loginBtn">
                        <i class='bx bx-log-in-circle'></i>
                        Iniciar Sesión
                    </button>
                    @if ($errors->any())
                        <div class="errors">
                            <ul class="l-errors">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>

                <div class="signup-link">
                    <p>¿No tiene una cuenta? <a href="#">Contáctenos</a></p>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2023 POS System Pro. Todos los derechos reservados.</p>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
