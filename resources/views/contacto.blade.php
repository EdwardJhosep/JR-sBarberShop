<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
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
        .social-links {
            margin-top: 20px;
            text-align: center;
        }
        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: #dc3545;
            font-size: 24px;
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: #c82333;
        }
        .barbers {
            margin-top: 50px;
        }
        .barbers h3 {
            text-align: center;
            margin-bottom: 30px;
        }
        .card {
            border: none;
            margin-bottom: 30px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }
        .card img {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .card-body {
            text-align: center;
            padding: 20px;
        }
        .card-title {
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: 500;
        }
        .card-text {
            margin-bottom: 15px;
            font-size: 16px;
        }
        .social-icons {
            font-size: 24px;
            margin-top: 10px;
        }
        .social-icons a {
            color: #dc3545;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #c82333;
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

    <!-- Contenido de Contacto -->
    <div class="container">
        <div class="social-links">
            <h3>Síguenos en Redes Sociales</h3>
            <a href="https://www.facebook.com/JRsBarberShop" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/JRsBarberShop" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/JRsBarberShop" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="barbers">
            <h3>Conoce a Nuestros Barberos</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/imagenes/barber1.jpg" class="card-img-top" alt="Barbero 1">
                        <div class="card-body">
                            <h5 class="card-title">Juan Pérez</h5>
                            <p class="card-text">Experto en cortes de cabello masculinos.</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/juanperez" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/juanperez" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://wa.me/123456789" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/imagenes/barber2.jpg" class="card-img-top" alt="Barbero 2">
                        <div class="card-body">
                            <h5 class="card-title">María García</h5>
                            <p class="card-text">Especialista en cortes de cabello femeninos.</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/mariagarcia" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/mariagarcia" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://wa.me/123456789" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/imagenes/barber3.jpg" class="card-img-top" alt="Barbero 3">
                        <div class="card-body">
                            <h5 class="card-title">Pedro Rodríguez</h5>
                            <p class="card-text">Maestro en estilos de barba y bigote.</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/pedrorodriguez" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/pedrorodriguez" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://wa.me/123456789" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-custom text-center">
        <div class="container">
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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>

