<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Citas - JR's Barber Shop</title>
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
            font-size: 1.8rem; /* Tamaño de la marca */
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
            background-color: #ffffff; /* Color de fondo */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            display: none;
            z-index: 1000;
        }
        .card {
            border: none;
            background-color: #f8f9fa; /* Color de fondo de la tarjeta */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Espacio entre tarjetas */
        }
        .card-body {
            padding: 1.5rem; /* Espaciado interno */
        }
        .footer-custom {
            background-color: #343a40; /* Fondo footer */
            color: #ffffff; /* Color de texto footer */
            padding: 20px 0;
            margin-top: 50px; /* Espacio arriba del footer */
        }
        .footer-custom .navbar-brand img {
            margin-bottom: 10px;
            max-width: 100px; /* Tamaño máximo de imagen */
        }
        .cita-card {
            border: 1px solid #dee2e6; /* Borde de la tarjeta */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .cita-card .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .cita-card .card-text {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        .cancelar-btn {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .cancelar-btn:hover {
            background-color: #c82333;
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
                    <a class="nav-link" href="productos" id="misReservas">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="miscitas" id="misReservas">
                        <i class="fas fa-calendar-alt"></i> Mis Reservas
                    </a>
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
                <h1 class="mb-4">Aquí podrás ver tus citas</h1>

                <div id="user-info">
                    <!-- Aquí se insertarán las citas -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="floating-profile" id="floatingProfile">
                    <div class="card">
                        <div class="card-body" id="perfilCliente">
                            <!-- Información del cliente -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-custom">
        <div class="container text-center">
            <a class="navbar-brand" href="#">
                <img src="/imagenes/logo.png" alt="Logo de JR's Barber Shop" class="img-fluid">
            </a>
            <p>&copy; 2024 JR's Barber Shop. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS y jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <script>
        var userInfo = document.getElementById('user-info');
        var perfilCliente = document.getElementById('perfilCliente');
        var verPerfilBtn = document.getElementById('verPerfil');
        var cerrarSesionBtn = document.getElementById('cerrarSesion');
        var floatingProfile = document.getElementById('floatingProfile');
        var clientPhoto = document.getElementById('clientPhoto');

        var cliente = JSON.parse(localStorage.getItem('cliente'));

        // Función para obtener y mostrar las citas
        function obtenerCitas() {
            var xhr = new XMLHttpRequest();
            var url = 'https://pakyavo.nyc.dom.my.id/api/vercitas';

            xhr.open('GET', url, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var citas = JSON.parse(xhr.responseText);

                    // Filtrar citas del cliente actual
                    var citasCliente = citas.filter(function(cita) {
                        return cita.client_id === cliente.id;
                    });

                    // Construir el HTML para mostrar las citas
                    var citasHTML = '';
                    citasCliente.forEach(function(cita) {
                        var qrCodeUrl = 'https://api.qrserver.com/v1/create-qr-code/?data=' + encodeURIComponent(cita.qr_code) + '&size=300x300';

                        citasHTML += `
                            <div class="cita-card">
                                <h5 class="card-title">${cita.servicio.nombre}</h5>
                                <div class="card-text">
                                    <p>Fecha y Hora: ${formatoFechaHora(cita.fecha_hora)}</p>
                                    <p>Precio Estimado: ${cita.precio_estimado}</p>
                                    <p>Cliente: ${cita.cliente.nombre}</p>
                                    <img src="${qrCodeUrl}" alt="Código QR">
                                </div>
                                <button class="cancelar-btn" onclick="cancelarCita('${cita.id}')">Cancelar</button>
                            </div>
                        `;
                    });

                    // Mostrar las citas en el contenedor correspondiente
                    userInfo.innerHTML = citasHTML;
                } else {
                    console.error('Error al obtener las citas:', xhr.statusText);
                }
            };

            xhr.onerror = function() {
                console.error('Error de red al intentar obtener las citas.');
            };

            xhr.send();
        }

        // Función para dar formato a la fecha y hora
        function formatoFechaHora(fechaHora) {
            var fecha = new Date(fechaHora);
            var options = { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' };
            return fecha.toLocaleDateString('es-ES', options);
        }

        // Verificar si existe el cliente en localStorage
        if (cliente && cliente.id && cliente.nombre) {
            // Mostrar la foto del cliente en el menú
            clientPhoto.src = cliente.foto;
        } else {
            // Redirigir al usuario a la página de login
            setTimeout(function() {
                window.location.href = 'login'; // Ajusta la URL según tu estructura de archivos
            }, 2000); // Redirigir después de 2 segundos (ajusta el tiempo según tus necesidades)
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

        // Evento para cerrar sesión
        cerrarSesionBtn.addEventListener('click', function(event) {
            event.preventDefault();
            cerrarSesion();
        });

        // Evento para ver perfil
        verPerfilBtn.addEventListener('click', function(event) {
            event.preventDefault();
            // Mostrar el perfil del cliente
            obtenerInformacionCliente(cliente.id); // Mostrar la información del perfil al hacer clic
        });

        document.addEventListener('click', function(event) {
            var isClickInside = floatingProfile.contains(event.target);
            var isProfileButton = verPerfilBtn.contains(event.target);
            if (!isClickInside && !isProfileButton) {
                floatingProfile.style.display = 'none';
            }
        });

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
                    redirigirALogin();
                }
            };

            xhr.onerror = function() {
                console.error('Error de red al intentar obtener la información del cliente.');
                redirigirALogin();
            };

            xhr.send();
        }

        // Función para cancelar una cita
        function cancelarCita(citaId) {
            var xhr = new XMLHttpRequest();
            var url = 'https://pakyavo.nyc.dom.my.id/api/cancelarcita/' + citaId;

            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');

            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log('Cita cancelada correctamente');
                    obtenerCitas(); // Actualizar la lista de citas después de cancelar
                } else {
                    console.error('Error al cancelar la cita:', xhr.statusText);
                }
            };

            xhr.onerror = function() {
                console.error('Error de red al intentar cancelar la cita.');
            };

            xhr.send();
        }

        // Función para redirigir al usuario a la página de login
        function redirigirALogin() {
            setTimeout(function() {
                window.location.href = 'login'; // Ajusta la URL según tu estructura de archivos
            }, 2000); // Redirigir después de 2 segundos (ajusta el tiempo según tus necesidades)
        }

        if (cliente && cliente.id) {
            obtenerInformacionCliente(cliente.id);
            obtenerCitas();
        }
    </script>
</body>
</html>
