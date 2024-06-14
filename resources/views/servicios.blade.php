<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios | JR's Barber Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }
        .navbar-custom {
            background-color: #343a40;
            border-bottom: 4px solid #dc3545;
        }
        .footer-custom {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            margin-top: 50px;
        }
        .footer-custom .navbar-brand img {
            margin-bottom: 10px;
        }
        .footer-custom img.img-fluid {
            max-width: 150px;
        }
        .service-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .service-card:hover {
            transform: translateY(-5px);
        }
        .service-card .card-img-top {
            height: 250px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .service-card .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .service-card .card-title {
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 22px;
            font-weight: 600;
        }
        .service-card .card-text {
            margin-bottom: 15px;
            font-size: 16px;
        }
        .service-card .btn-primary {
            background-color: #dc3545;
            border: none;
            transition: background-color 0.3s ease;
        }
        .service-card .btn-primary:hover {
            background-color: #c82333;
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
                    <a class="nav-link active" href="{{ route('servicios') }}">Servicios</a>
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

<!-- Contenido de Servicios -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="/imagenes/corte.jpg" class="card-img-top" alt="Corte de Cabello">
                <div class="card-body">
                    <h5 class="card-title">Corte de Cabello</h5>
                    <p class="card-text">Variedad de estilos para hombres y mujeres. Desde cortes clásicos hasta tendencias modernas.</p>
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="/imagenes/afeitado.jpg" class="card-img-top" alt="Afeitado">
                <div class="card-body">
                    <h5 class="card-title">Afeitado</h5>
                    <p class="card-text">Afeitados clásicos y modernos con productos de alta calidad para un cuidado excepcional de la piel.</p>
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="/imagenes/barba.jpg" class="card-img-top" alt="Estilismo de Barba">
                <div class="card-body">
                    <h5 class="card-title">Estilismo de Barba</h5>
                    <p class="card-text">Diversidad de estilos de barba y bigote, desde barbas completas hasta estilos de bigote únicos.</p>
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="/imagenes/manicura.jpg" class="card-img-top" alt="Manicura y Pedicura">
                <div class="card-body">
                    <h5 class="card-title">Manicura y Pedicura</h5>
                    <p class="card-text">Cuidado completo de manos y pies, incluyendo tratamiento de cutículas y exfoliación.</p>
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="/imagenes/coloracion.jpg" class="card-img-top" alt="Coloración">
                <div class="card-body">
                    <h5 class="card-title">Coloración</h5>
                    <p class="card-text">Servicios de coloración de cabello personalizados para hombres y mujeres, incluyendo tintes naturales y de fantasía.</p>
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="/imagenes/tratamiento.jpg" class="card-img-top" alt="Tratamientos Capilares">
                <div class="card-body">
                    <h5 class="card-title">Tratamientos Capilares</h5>
                    <p class="card-text">Tratamientos especializados para fortalecer y revitalizar el cabello, incluyendo hidratación profunda y tratamientos anticaída.</p>
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Redes Sociales y Footer -->
<div class="social-links mt-5">
    <h3>Síguenos en Redes Sociales</h3>
    <a href="https://www.facebook.com/JRsBarberShop" target="_blank" class="text-danger"><i class="fab fa-facebook-square mr-2"></i></a>
    <a href="https://www.instagram.com/JRsBarberShop" target="_blank" class="text-danger"><i class="fab fa-instagram mr-2"></i></a>
    <a href="https://twitter.com/JRsBarberShop" target="_blank" class="text-danger"><i class="fab fa-twitter mr-2"></i></a>
</div>

<!-- Footer -->
<footer class="footer-custom text-center mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="navbar-brand" href="#">
                    <img src="/imagenes/logo.png" alt="Logo de JR's Barber Shop" width="30" height="30" class="mr-2">
                    JR's Barber Shop
                </a>
            </div>
        </div>
        <div class="row mt-3">
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

