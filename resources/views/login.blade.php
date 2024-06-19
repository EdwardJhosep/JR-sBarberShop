<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login y Registro</title>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
        <form id="loginForm" action="#" method="POST">
            <div class="form-group">
                <label for="username">Correo electrónico</label>
                <input type="email" id="username" name="email" class="form-control" required>
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
    <div class="register-form" id="register-form" style="display: none;">
        <h2>Registro</h2>
        <form id="registerForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="genero">Género</label>
                <select id="genero" name="genero" class="form-control" required>
                    <option value="">Selecciona tu género</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                    <option value="prefiero_no_decirlo">Prefiero no decirlo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto" class="form-control" accept="image/*" required>
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
    <footer class="footer-custom">
        <div class="container text-center">
            <a class="navbar-brand" href="#">
                <img src="/imagenes/logo.png" alt="Logo de JR's Barber Shop" class="img-fluid">
            </a>
            <p>&copy; 2024 JR's Barber Shop. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        function toggleForm(form) {
            if (form === 'register') {
                $('.login-form').hide();
                $('.register-form').show();
            } else {
                $('.login-form').show();
                $('.register-form').hide();
            }
        }

        $(document).ready(function () {
            $('#registerForm').on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: 'https://pakyavo.nyc.dom.my.id/api/cliente/register',
                    
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        alert('Registro exitoso');
                        toggleForm('login');
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error('Error:', errorThrown);
                        if (jqXHR.responseJSON && jqXHR.responseJSON.errors) {
                            const errors = jqXHR.responseJSON.errors;
                            let errorMessage = 'Hubo errores con tu registro:\n';
                            $.each(errors, function(key, value) {
                                errorMessage += `\n- ${value}`;
                            });
                            alert(errorMessage);
                        } else {
                            alert('Hubo un error con el registro. Por favor, inténtalo de nuevo.');
                        }
                    }
                });
            });

            $('#loginForm').on('submit', function (e) {
                e.preventDefault();
                var formData = {
                    email: $('#username').val(),
                    password: $('#password').val()
                };

                $.ajax({
                    url: 'https://pakyavo.nyc.dom.my.id/api/cliente/login',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        alert('Inicio de sesión exitoso');

                        // Guardar el cliente en localStorage para usarlo en la página de productos
                        localStorage.setItem('cliente', JSON.stringify(response.cliente));

                        // Redirigir según el correo electrónico
                        if (formData.email === 'juananterodrigueze@gmail.com') {
                            window.location.href = '/admin'; // Ajustar la ruta según tu configuración
                        } else {
                            window.location.href = '/productos'; // Ajustar la ruta según tu configuración
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error('Error:', errorThrown);
                        if (jqXHR.responseJSON && jqXHR.responseJSON.error) {
                            alert(jqXHR.responseJSON.error);
                        } else {
                            alert('Hubo un error al iniciar sesión. Por favor, inténtalo de nuevo.');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
