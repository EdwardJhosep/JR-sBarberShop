<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JR's Barber Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        .main-content {
            margin-bottom: 50px;
        }
        .jumbotron {
            background-color: #343a40; /* Fondo jumbotron */
            color: #ffffff; /* Color de texto jumbotron */
            padding: 30px;
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #dc3545; /* Fondo botón principal */
            border-color: #dc3545; /* Borde botón principal */
        }
        .btn-primary:hover {
            background-color: #c82333; /* Fondo botón principal al hover */
            border-color: #c82333; /* Borde botón principal al hover */
        }
        .service-item {
            background-color: #ffffff; /* Fondo de cada servicio */
            border: 1px solid #dee2e6; /* Borde de cada servicio */
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 10px;
            height: 100%;
        }
        .service-item img {
            max-width: 100%;
            height: 200px; /* Altura fija para las imágenes */
            object-fit: cover; /* Ajustar la imagen al tamaño del contenedor */
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .service-item h3 {
            margin-bottom: 10px;
        }
        .service-item p {
            margin-bottom: 0;
        }
        .map-container {
            margin-top: 20px; /* Ajuste específico para dispositivos móviles */
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

    <!-- Contenido Principal -->
    <div class="container mt-5 main-content">
        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1 class="display-4">Bienvenido a JR's Barber Shop</h1>
                    <p class="lead">Tu lugar para cortes de cabello y afeitados.</p>
                    <p class="lead">En JR's Barber Shop nos enorgullecemos de ofrecerte un servicio excepcional y una experiencia única. Desde cortes de cabello clásicos hasta afeitados profesionales, nuestro equipo de expertos está aquí para ayudarte a lucir y sentir lo mejor posible.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Más información</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/imagenes/logoJR.png" alt="Barber Shop" class="img-fluid">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Nuestros Servicios</h2>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="/imagenes/cortecabello.jpg" alt="Corte de Cabello" class="img-fluid">
                    <h3>Cortes de cabello clásicos</h3>
                    <p>Disfruta de cortes de cabello a la moda y de calidad.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="/imagenes/afeitado.jpg" alt="Afeitado Profesional" class="img-fluid">
                    <h3>Afeitados profesionales</h3>
                    <p>Experimenta afeitados con productos de alta gama y precisión.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="/imagenes/tratamientocapilar.jpg" alt="Tratamiento Capilar" class="img-fluid">
                    <h3>Cuidado y tratamiento capilar</h3>
                    <p>Tratamientos para cuidar y mejorar la salud de tu cabello.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Nuestra Ubicación</h2>
                <p>Estamos ubicados en la siguiente dirección:</p>
                <address>
                    JR's Barber Shop<br>
                    Calle Falsa #123, Ciudad Ficticia<br>
                    Teléfono: (123) 456-7890
                </address>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.5498272001787!2d-76.23214358313236!3d-9.917352295805841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7c305e50f9923%3A0x8e7987f8ed2d5af2!2sSENATI%2C%20El%20Parque%2C%20Amarilis%2010002!5e0!3m2!1ses-419!2spe!4v1718337378362!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

</body>
</html>

