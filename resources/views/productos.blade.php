<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JR's Barber Shop</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
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
        .rounded-circle {
            width: 40px;
            height: 40px;
            margin-right: 10px;
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
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 550px; /* Altura fija para mantener uniformidad */
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 100%;
            height: 50%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        .card:hover img {
            transform: scale(1.1);
        }
        .discount {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 5px;
            font-size: 16px;
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
        .search-bar {
            background-color: #f8f9fa;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            border-radius: 50px;
            width: 100%;
            margin-bottom: 20px;
        }

        /* Estilos para el selector de fecha y hora */
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            font-weight: bold;
        }
        .datetime-input {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .datetime-input:focus {
            outline: 0;
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .datetime-label {
            display: block;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand" href="#">
                <img src="/imagenes/logo.png" alt="Logo de JR's Barber Shop" width="30" height="30" class="mr-2">
                JR's Barber Shop
            </a>
            <ul class="navbar-nav ml-auto">
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
                <h1 class="mb-4">Bienvenido a JR's Barber Shop</h1>

                <div id="user-info">
                    <!-- Mostrar la información del cliente aquí -->
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
        <h2 class="mt-5">Nuestros Servicios</h2>
        <input type="text" class="search-bar" id="searchBar" placeholder="Buscar servicios...">
        <div id="servicesList" class="row">
            <!-- Aquí se mostrarán los servicios -->
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
        var misReservasBtn = document.getElementById('misReservas');
        var cerrarSesionBtn = document.getElementById('cerrarSesion');
        var floatingProfile = document.getElementById('floatingProfile');
        var clientPhoto = document.getElementById('clientPhoto');
        var servicesList = document.getElementById('servicesList');
        var searchBar = document.getElementById('searchBar');

        // Función para obtener la información del cliente desde la API
        function obtenerInformacionCliente(clienteId) {
            var xhr = new XMLHttpRequest();
            var url = 'https://pakyavo.nyc.dom.my.id/api/cliente/' + clienteId;

            xhr.open('GET', url, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var clienteData = JSON.parse(xhr.responseText);
                    perfilCliente.innerHTML = `
                        <h5 class="card-title">${clienteData.nombre}</h5>
                        <p class="card-text"><strong>Correo:</strong> ${clienteData.correo}</p>
                        <p class="card-text"><strong>Teléfono:</strong> ${clienteData.telefono}</p>
                        <img src="${clienteData.foto}" alt="Foto del cliente" class="img-fluid rounded-circle">
                    `;
                    clientPhoto.src = clienteData.foto;
                    // Mostrar el perfil flotante
                    floatingProfile.style.display = 'block';
                } else {
                    console.error('Error al obtener información del cliente:', xhr.statusText);
                }
            };

            xhr.onerror = function() {
                console.error('Error de red al intentar obtener la información del cliente.');
            };

            xhr.send();
        }

        // Función para obtener la lista de servicios desde la API
        function obtenerServicios() {
            var xhr = new XMLHttpRequest();
            var url = 'https://pakyavo.nyc.dom.my.id/api/verservicios';

            xhr.open('GET', url, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var servicios = JSON.parse(xhr.responseText);
                    mostrarServicios(servicios);
                } else {
                    console.error('Error al obtener servicios:', xhr.statusText);
                }
            };

            xhr.onerror = function() {
                console.error('Error de red al intentar obtener los servicios.');
            };

            xhr.send();
        }

        // Función para mostrar los servicios en la página
        function mostrarServicios(servicios) {
            servicesList.innerHTML = '';

            servicios.forEach(function(servicio) {
                var serviceItem = document.createElement('div');
                serviceItem.className = 'col-md-6 col-lg-3 mb-4';
                serviceItem.innerHTML = `
                    <div class="card">
                        <img src="${servicio.foto1}" alt="Foto del servicio" class="card-img-top">
                        <div class="discount">Descuento: $${servicio.descuento}</div>
                        <div class="card-body">
                            <h5 class="card-title">${servicio.nombre}</h5>
                            <p class="card-text">${servicio.descripcion}</p>
                            <p class="card-text"><strong>Precio Final:</strong> $${servicio.precio_final}</p>
                            <div class="form-group">
                                <label for="datePicker${servicio.id}" class="datetime-label">Selecciona fecha y hora:</label>
                                <input type="datetime-local" id="datePicker${servicio.id}" class="form-control datetime-input" required>
                            </div>
                            <button class="btn btn-primary btn-reservar" onclick="reservarCita(${servicio.id})">
                                <i class="fas fa-shopping-cart"></i> Reservar
                            </button>
                        </div>
                    </div>
                `;
                servicesList.appendChild(serviceItem);
            });
        }

        // Función para buscar servicios en tiempo real
        function buscarServicios(event) {
            var searchTerm = event.target.value.toLowerCase();
            var xhr = new XMLHttpRequest();
            var url = 'https://pakyavo.nyc.dom.my.id/api/verservicios';

            xhr.open('GET', url, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var servicios = JSON.parse(xhr.responseText);
                    var filteredServicios = servicios.filter(function(servicio) {
                        return servicio.nombre.toLowerCase().includes(searchTerm);
                    });
                    mostrarServicios(filteredServicios);
                } else {
                    console.error('Error al buscar servicios:', xhr.statusText);
                }
            };

            xhr.onerror = function() {
                console.error('Error de red al intentar buscar los servicios.');
            };

            xhr.send();
        }

        // Verificar si existe el cliente en localStorage
        var cliente = JSON.parse(localStorage.getItem('cliente'));

        if (cliente && cliente.id && cliente.nombre) {
            // Mostrar la foto del cliente en el menú
            clientPhoto.src = cliente.foto;
        } else {
            // No se encontraron datos del cliente en localStorage, redirigir a la página de login
            redirigirALogin();
        }

        // Función para redirigir al usuario a la página de login
        function redirigirALogin() {
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
                    redirigirALogin();
                }
            };

            xhr.onerror = function() {
                console.error('Error de red al intentar obtener la información del cliente.');
                redirigirALogin();
            };

            xhr.send();
        }


        // Función para reservar una cita
        function reservarCita(servicioId) {
            var datePicker = document.getElementById(`datePicker${servicioId}`);
            var fechaHora = datePicker.value;

            if (!fechaHora) {
                alert('Por favor, selecciona una fecha y hora.');
                return;
            }

            var xhr = new XMLHttpRequest();
            var url = 'https://pakyavo.nyc.dom.my.id/api/citas';

            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');

            xhr.onload = function() {
                if (xhr.status === 201) {
                    var response = JSON.parse(xhr.responseText);
                    console.log('Cita y notificación creadas correctamente:', response);
                    alert('Cita reservada exitosamente. Código QR: ' + response.cita.qr_code);
                    // Aquí puedes redirigir o actualizar la página según tu flujo de la aplicación
                } else if (xhr.status === 400) {
                    console.error('Error al reservar cita:', xhr.responseText);
                    var errorResponse = JSON.parse(xhr.responseText);
                    alert('Error al reservar cita: ' + errorResponse.error);
                } else {
                    console.error('Error al reservar cita. Código de estado HTTP:', xhr.status);
                    alert('Error al reservar cita. Inténtalo de nuevo más tarde.');
                }
            };

            xhr.onerror = function() {
                console.error('Error de red al intentar reservar la cita.');
                alert('Error de red al intentar reservar la cita. Inténtalo de nuevo más tarde.');
            };

            // Ejemplo de cuerpo del request
            var data = {
                client_id: cliente.id,
                servicio_id: servicioId,
                empleado_id: 1, // Aquí deberías establecer el empleado correcto
                fecha_hora: fechaHora, // Utilizar la fecha y hora seleccionadas
                precio_estimado: 100 // Ajusta el precio estimado según tu lógica
            };

            xhr.send(JSON.stringify(data));
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
        // Evento para buscar servicios en tiempo real
        searchBar.addEventListener('input', buscarServicios);

        // Evento para ocultar el perfil flotante al hacer clic fuera de él
        document.addEventListener('click', function(event) {
            var isClickInside = floatingProfile.contains(event.target);
            var isProfileButton = verPerfilBtn.contains(event.target);
            if (!isClickInside && !isProfileButton) {
                floatingProfile.style.display = 'none';
            }
        });

        // Llamar a obtenerInformacionCliente y obtenerServicios al cargar la página
        if (cliente && cliente.id) {
            obtenerInformacionCliente(cliente.id);
        }

        obtenerServicios();
    </script>
</body>
</html>
