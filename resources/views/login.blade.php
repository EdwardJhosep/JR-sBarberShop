<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #343a40; /* Color de texto principal */
        }
        .navbar-custom {
            background-color: #343a40; /* Fondo navbar */
            border-bottom: 4px solid #dc3545; /* Línea inferior roja */
        }
        .footer-custom {
            background-color: #343a40; /* Fondo footer */
            color: #ffffff; /* Color de texto footer */
            padding: 20px 0;
            margin-top: 50px; /* Espacio arriba del footer */
        }
        .footer-custom .navbar-brand img {
            margin-bottom: 10px;
        }
        .footer-custom img.img-fluid {
            max-width: 150px; /* Tamaño máximo de imagen */
        }
        /* Estilos para el formulario */
        .login-form, .register-form {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .login-form h2, .register-form h2 {
            font-size: 24px;
            margin-bottom: 25px;
            text-align: center;
        }
        .login-form .form-group, .register-form .form-group {
            margin-bottom: 20px;
        }
        .login-form label, .register-form label {
            font-weight: 600;
        }
        .login-form .btn, .register-form .btn {
            background-color: #dc3545;
            color: #ffffff;
            font-weight: 500;
            transition: background 0.3s ease;
        }
        .login-form .btn:hover, .register-form .btn:hover {
            background-color: #c82333;
        }
        .form-toggle {
            text-align: center;
            margin-top: 20px;
        }
        .form-toggle a {
            color: #007bff;
            cursor: pointer;
        }
        .form-toggle a:hover {
            text-decoration: none;
        }
        .welcome-container {
            background-color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        .social-links {
            margin-top: 30px;
            text-align: center;
        }
        .social-links a {
            font-size: 24px;
            margin: 0 10px;
            color: #007bff;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                margin-right: 0 !important; /* Ajuste para evitar que se superponga el botón de menú */
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="/imagenes/logo.png" alt="Logo de JR's Barber Shop" width="30" height="30" class="mr-2">
                JR's Barber Shop
            </a>
            <!-- Botón de menú para dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bienvenida a la barbería -->
    <div class="welcome-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Bienvenido a JR's Barber Shop</h1>
                    <p>¡Donde tu estilo es nuestra prioridad!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de login -->
    <div class="login-form">
        <h2>Iniciar sesión</h2>
        <form id="loginForm" onsubmit="event.preventDefault(); loginUser();">
            <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-block">Iniciar sesión</button>
        </form>
        <div class="form-toggle">
            <p>¿No tienes cuenta? <a href="#" onclick="toggleForm('register')">Regístrate aquí</a></p>
        </div>
    </div>

    <!-- Formulario de registro (oculto inicialmente) -->
    <div class="register-form" style="display: none;">
        <h2>Registro</h2>
        <form id="registerForm" onsubmit="event.preventDefault(); registerUser();">
            <div class="form-group">
                <label for="fullname">Nombre completo</label>
                <input type="text" id="fullname" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="newpassword">Contraseña</label>
                <input type="password" id="newpassword" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="genero">Género</label>
                <select id="genero" name="genero" class="form-control" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto (opcional)</label>
                <input type="file" id="foto" name="foto" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-block">Registrarse</button>
        </form>
        <div class="form-toggle">
            <p>¿Ya tienes cuenta? <a href="#" onclick="toggleForm('login')">Inicia sesión aquí</a></p>
        </div>
    </div>

    <!-- Enlaces a redes sociales -->
    <div class="social-links">
        <h3>Síguenos en Redes Sociales</h3>
        <a href="https://www.facebook.com/JRsBarberShop" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.instagram.com/JRsBarberShop" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/JRsBarberShop" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>

    <!-- Footer -->
    <footer class="footer-custom text-center">
        <div class="container>
            <div class="row">
                <div class="col-md-12">
                    <a class="navbar-brand" href="#">
                        <img src="/imagenes/logo.png" alt="Logo de JR's Barber Shop" width="30" height="30" class="mr-2">
                        JR's Barber Shop
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2024 JR's Barber Shop. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <!-- Script para alternar entre formularios -->
    <script>
        function toggleForm(type) {
            if (type === 'register') {
                $('.login-form').hide();
                $('.register-form').show();
            } else {
                $('.register-form').hide();
                $('.login-form').show();
            }
        }

        // Función para registrar un nuevo usuario
        function registerUser() {
            var form = $('#registerForm')[0];
            var data = new FormData(form);

            $.ajax({
                type: 'POST',
                url: 'https://roqridu.nyc.dom.my.id/api/cliente/register',
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                data: data,
                success: function(response) {
                    console.log('Registro exitoso:', response);
                    alert('¡Registro exitoso!');
                    // Opcionalmente, puedes redirigir al usuario a otra página tras el registro exitoso
                    // window.location.href = '/ruta-de-redireccion';
                },
                error: function(error) {
                    console.error('Error en el registro:', error);
                    alert('Error en el registro. Por favor, inténtalo de nuevo más tarde.');
                }
            });
        }

        // Función para iniciar sesión
        function loginUser() {
            var username = $('#username').val();
            var password = $('#password').val();

            var data = {
                username: username,
                password: password
            };

            $.ajax({
                type: 'POST',
                url: 'https://roqridu.nyc.dom.my.id/api/cliente/login',
                data: data,
                success: function(response) {
                    console.log('Inicio de sesión exitoso:', response);
                    alert('¡Inicio de sesión exitoso!');
                    // Opcionalmente, puedes redirigir al usuario a otra página tras el inicio de sesión exitoso
                    // window.location.href = '/ruta-de-redireccion';
                },
                error: function(error) {
                    console.error('Error en el inicio de sesión:', error);
                    alert('Error en el inicio de sesión. Verifica tus credenciales.');
                }
            });
        }
    </script>

</body>
</html>

