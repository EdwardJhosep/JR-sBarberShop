<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .rounded-circle {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .navbar-custom {
            background-color: #343a40; /* Fondo navbar */
            border-bottom: 4px solid #dc3545; /* Línea inferior roja */
        }
        .navbar-custom .navbar-brand {
            color: #ffffff; /* Color de texto navbar */
            font-weight: bold;
            font-size: 1.5rem;
        }
        .navbar-custom .navbar-toggler {
            border-color: #ffffff; /* Color del icono del botón de menú */
        }
        .navbar-custom .navbar-toggler-icon {
            background-color: #ffffff; /* Color del icono del botón de menú */
        }
        .navbar-custom .nav-link {
            color: #ffffff !important; /* Color de texto enlaces */
        }
        .navbar-custom .nav-link:hover {
            color: #f8f9fa !important; /* Color de texto enlaces al pasar el mouse */
        }
        .floating-profile {
            position: fixed;
            top: 10%;
            right: 0;
            width: 300px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            display: none;
            z-index: 1000;
        }
        .card {
            border: none;
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 1.25rem;
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
        .access-denied-message {
            display: none;
            color: red;
            text-align: center;
            font-size: 1.2rem;
            margin-top: 20px;
        }
        .form-container {
            margin-top: 20px;
            display: none; /* Ocultar formulario por defecto */
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container.show {
            display: block; /* Mostrar formulario cuando se haga clic en el botón */
        }
        .btn-toggle-form {
            margin-top: 20px;
        }
        .form-title {
            background-color: #dc3545;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #343a40;
            border-color: #343a40;
        }
        .btn-primary:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .service-container {
            margin-top: 20px;
        }
        .service-card {
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }
        .service-card img {
            max-height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
            z-index: 10;
        }
        .service-card:hover img {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">
            <img src="/imagenes/logo.png" alt="Logo de JR's Barber Shop" width="30" height="30" class="mr-2">
            JR's Barber Shop
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('notificacion') }}">Notificacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('empleados') }}">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios1') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('citas') }}">Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#" id="cerrarSesion">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="verPerfil">
                        <img src="https://via.placeholder.com/150" alt="Foto del cliente" class="rounded-circle" id="clientPhoto">
                        Ver Perfil
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-4">Bienvenido a la página de productos</h1>

                <div id="user-info">
                    <!-- Mostrar la información del cliente aquí -->
                </div>
                <div class="access-denied-message" id="accessDeniedMessage">Acceso restringido. Redirigiendo al login...</div>
                <button class="btn btn-secondary btn-toggle-form" id="toggleFormBtn">Mostrar Formulario</button>
                <div class="form-container" id="formContainer">
                    <h2 class="form-title">Agregar Servicio</h2>
                    <form id="agregarServicioForm">
                        <div class="form-group">
                            <label for="nombre">Nombre del Servicio</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="form-group">
                            <label for="descuento">Descuento</label>
                            <input type="number" class="form-control" id="descuento" name="descuento">
                        </div>
                        <div class="form-group">
                            <label for="foto1">Foto 1</label>
                            <input type="file" class="form-control-file" id="foto1" name="foto1">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Servicio</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="floating-profile" id="floatingProfile">
                    <div class="card">
                        <div class="card-body" id="perfilCliente">
                            <!-- Información del perfil del cliente -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row service-container" id="serviceContainer">
            <!-- Mostrar los servicios aquí -->
        </div>
    </div>
    <footer class="footer-custom text-center">
        <a href="#" class="navbar-brand">
            <img src="/imagenes/logoc.png" alt="Logo de JR's Barber Shop" class="img-fluid">
        </a>
        <p>Trabajamos para atenderle</p>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var perfilCliente = document.getElementById('perfilCliente');
            var verPerfilBtn = document.getElementById('verPerfil');
            var cerrarSesionBtn = document.getElementById('cerrarSesion');
            var floatingProfile = document.getElementById('floatingProfile');
            var clientPhoto = document.getElementById('clientPhoto');
            var accessDeniedMessage = document.getElementById('accessDeniedMessage');
            var formContainer = document.getElementById('formContainer');
            var toggleFormBtn = document.getElementById('toggleFormBtn');
            var serviceContainer = document.getElementById('serviceContainer');
    
            var cliente = JSON.parse(localStorage.getItem('cliente'));
    
            // Función para obtener la información del cliente desde la API
            function obtenerInformacionCliente(id) {
                var xhr = new XMLHttpRequest();
                var url = 'https://pakyavo.nyc.dom.my.id/api/mostrarcliente/' + id;
    
                xhr.open('GET', url, true);
    
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var clienteData = JSON.parse(xhr.responseText).cliente;
    
                        // Mostrar la información del cliente en el perfil
                        perfilCliente.innerHTML = `
                            <p><strong>ID:</strong> ${id}</p>
                            <p><strong>Nombre:</strong> ${clienteData.nombre}</p>
                            <p><strong>Email:</strong> ${clienteData.email}</p>
                            <p><strong>Género:</strong> ${clienteData.genero}</p>
                            <p><strong>Teléfono:</strong> ${clienteData.telefono}</p>
                            <img src="${clienteData.foto}" alt="Foto del cliente" class="img-fluid rounded-circle">
                        `;
    
                        // Mostrar la foto del cliente en el menú
                        clientPhoto.src = clienteData.foto;
    
                        // Mostrar el perfil flotante
                        floatingProfile.style.display = 'block';
                    } else {
                        console.error('Error al obtener la información del cliente:', xhr.statusText);
                        mostrarAccesoRestringido();
                    }
                };
    
                xhr.onerror = function() {
                    console.error('Error de red al intentar obtener la información del cliente.');
                    mostrarAccesoRestringido();
                };
    
                xhr.send();
            }
    
            // Función para redirigir a la página de login
            function redirigirALogin() {
                setTimeout(function() {
                    window.location.href = 'login'; // Ajusta la URL según tu estructura de archivos
                }, 2000); // Redirigir después de 2 segundos (ajusta el tiempo según tus necesidades)
            }
    
            // Función para mostrar el mensaje de acceso restringido y redirigir
            function mostrarAccesoRestringido() {
                accessDeniedMessage.style.display = 'block';
                redirigirALogin();
            }
    
            // Función para cerrar sesión llamando a la API
            function cerrarSesion() {
                var xhr = new XMLHttpRequest();
                var url = 'https://pakyavo.nyc.dom.my.id/api/cliente/logout';
    
                xhr.open('POST', url, true);
                xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
    
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log('Sesión cerrada correctamente');
                        // Limpiar localStorage y redirigir a la página de login
                        localStorage.clear();
                        redirigirALogin();
                    } else {
                        console.error('Error al cerrar sesión:', xhr.statusText);
                    }
                };
    
                xhr.onerror = function() {
                    console.error('Error de red al intentar cerrar la sesión.');
                };
    
                xhr.send();
            }
    
            // Verificar si existe el cliente en localStorage y obtener su información
            if (cliente && cliente.id) {
                // Mostrar la foto del cliente en el menú
                clientPhoto.src = cliente.foto;
                // Obtener información adicional del cliente
                obtenerInformacionCliente(cliente.id);
            } else {
                // No se encontraron datos del cliente en localStorage, redirigir a la página de login
                mostrarAccesoRestringido();
            }
    
            // Evento para cerrar sesión
            cerrarSesionBtn.addEventListener('click', function(event) {
                event.preventDefault();
                cerrarSesion();
            });
    
            // Evento para ver perfil
            verPerfilBtn.addEventListener('click', function(event) {
                event.preventDefault();
                // Mostrar el perfil del cliente
                obtenerInformacionCliente(cliente.id);
            });
    
            // Evento para ocultar el perfil flotante al hacer clic fuera de él
            document.addEventListener('click', function(event) {
                var isClickInside = floatingProfile.contains(event.target);
                var isProfileButton = verPerfilBtn.contains(event.target);
                if (!isClickInside && !isProfileButton) {
                    floatingProfile.style.display = 'none';
                }
            });
    
            // Función para manejar la respuesta del servidor al agregar un servicio
            function handleResponse(xhr) {
                if (xhr.status === 201) {
                    alert('Servicio agregado exitosamente');
                    document.getElementById('agregarServicioForm').reset(); // Limpiar el formulario
                    obtenerServicios(); // Actualizar la lista de servicios
                    formContainer.classList.remove('show'); // Ocultar el formulario
                    toggleFormBtn.textContent = 'Mostrar Formulario'; // Cambiar texto del botón
                } else {
                    alert('Error al agregar el servicio: ' + xhr.statusText);
                }
            }
    
            // Evento para manejar el envío del formulario de agregar servicio
            document.getElementById('agregarServicioForm').addEventListener('submit', function(event) {
                event.preventDefault();
    
                var formData = new FormData();
                formData.append('nombre', document.getElementById('nombre').value);
                formData.append('descripcion', document.getElementById('descripcion').value);
                formData.append('precio', document.getElementById('precio').value);
                formData.append('descuento', document.getElementById('descuento').value);
                formData.append('foto1', document.getElementById('foto1').files[0]);
    
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'https://pakyavo.nyc.dom.my.id/api/servicios', true);
                xhr.onload = function() {
                    handleResponse(xhr);
                };
                xhr.onerror = function() {
                    alert('Error de red al intentar agregar el servicio.');
                };
                xhr.send(formData);
            });
    
            // Evento para mostrar/ocultar el formulario de agregar servicio
            toggleFormBtn.addEventListener('click', function() {
                formContainer.classList.toggle('show');
                if (formContainer.classList.contains('show')) {
                    toggleFormBtn.textContent = 'Ocultar Formulario';
                } else {
                    toggleFormBtn.textContent = 'Mostrar Formulario';
                }
            });
    
            // Función para obtener los servicios desde la API y mostrarlos en la página
            function obtenerServicios() {
                var xhr = new XMLHttpRequest();
                var url = 'https://pakyavo.nyc.dom.my.id/api/verservicios';
    
                xhr.open('GET', url, true);
    
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var servicios = JSON.parse(xhr.responseText);
    
                        // Limpiar el contenedor de servicios
                        serviceContainer.innerHTML = '';
    
                        // Mostrar los servicios en el contenedor
                        servicios.forEach(function(servicio) {
    var servicioHTML = `
        <div class="col-md-4 service-card">
            <div class="card">
                <div class="discount-badge">${servicio.descuento}</div>
                <img src="${servicio.foto1}" class="card-img-top" alt="Imagen del servicio">
                <div class="card-body">
                    <h5 class="card-title">${servicio.nombre}</h5>
                    <p class="card-text">${servicio.descripcion}</p>
                    <p class="card-text"><strong>Precio final :</strong> ${servicio.precio_final}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-primary edit-button" onclick="editarServicio(${servicio.id})">Editar</button>
                    <button class="btn btn-danger delete-button" onclick="eliminarServicio(${servicio.id})">Eliminar</button>
                </div>
            </div>
        </div>
    `;
    serviceContainer.innerHTML += servicioHTML;
});

                    } else {
                        console.error('Error al obtener los servicios:', xhr.statusText);
                    }
                };
    
                xhr.onerror = function() {
                    console.error('Error de red al intentar obtener los servicios.');
                };
    
                xhr.send();
            }
    
            // Obtener los servicios al cargar la página
            obtenerServicios();
        });
    </script>
    
</body>
</html>
