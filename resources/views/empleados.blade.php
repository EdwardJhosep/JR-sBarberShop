<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
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
        #formEmpleado {
            display: none; /* Ocultar el formulario inicialmente */
        }
        /* Estilos adicionales para la lista de empleados */
#empleados-lista .card {
    border: none;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

#empleados-lista .card:hover {
    transform: translateY(-5px);
}

#empleados-lista .card img {
    height: 200px;
    object-fit: cover;
}

#empleados-lista .card-body {
    padding: 1.5rem;
}

#empleados-lista .card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 0.75rem;
}

#empleados-lista .card-text {
    margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
    #empleados-lista .card {
        margin-bottom: 30px;
    }
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
                <h1 class="mb-4">Agregar Empleado</h1>
                <button class="btn btn-primary mb-4" id="mostrarFormulario">Agregar Empleado</button>

                <form id="formEmpleado" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <input type="text" class="form-control" id="tipo" name="tipo" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Empleado</button>
                </form>

                <div id="user-info">
                    <!-- Mostrar la información del cliente aquí -->
                </div>

                <div class="access-denied-message" id="accessDeniedMessage">Acceso restringido. Redirigiendo al login...</div>
            </div>
            <div class="row" id="empleados-lista">
                <!-- Aquí se mostrará la lista de empleados -->
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
        <div class="row" id="empleados-lista">
            <!-- Aquí se mostrará la lista de empleados -->
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
        var formEmpleado = document.getElementById('formEmpleado');
        var mostrarFormularioBtn = document.getElementById('mostrarFormulario');
        var accessDeniedMessage = document.getElementById('accessDeniedMessage');
        var cerrarSesionBtn = document.getElementById('cerrarSesion');
        var verPerfilBtn = document.getElementById('verPerfil');
        var floatingProfile = document.getElementById('floatingProfile');
        var clientPhoto = document.getElementById('clientPhoto');
        var empleadosLista = document.getElementById('empleados-lista');

        // Evento para mostrar el formulario al hacer clic en el botón
        mostrarFormularioBtn.addEventListener('click', function() {
            formEmpleado.style.display = 'block'; // Mostrar el formulario
            mostrarFormularioBtn.style.display = 'none'; // Ocultar el botón de mostrar formulario
        });

        // Evento para agregar empleado
        formEmpleado.addEventListener('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(formEmpleado);

            fetch('https://vijfatu.nyc.dom.my.id/api/agregarempleado', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la petición');
                }
                return response.json();
            })
            .then(data => {
                console.log('Empleado agregado:', data);
                alert('Empleado agregado exitosamente');
                formEmpleado.reset(); // Limpiar el formulario después de enviar
                formEmpleado.style.display = 'none'; // Ocultar el formulario
                mostrarFormularioBtn.style.display = 'block'; // Mostrar el botón de agregar empleado
                mostrarEmpleados(); // Actualizar la lista de empleados
            })
            .catch(error => {
                console.error('Error al agregar empleado:', error);
                mostrarAccesoRestringido();
            });
        });

        // Función para obtener la información del cliente desde la API
        function obtenerInformacionCliente(id) {
            var xhr = new XMLHttpRequest();
            var url = 'https://vijfatu.nyc.dom.my.id/api/mostrarcliente/' + id;

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
            var url = 'https://vijfatu.nyc.dom.my.id/api/cliente/logout';

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
        var cliente = JSON.parse(localStorage.getItem('cliente'));
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

        // Función para obtener y mostrar la lista de empleados
        function mostrarEmpleados() {
    fetch('https://vijfatu.nyc.dom.my.id/api/verempleados')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la petición');
            }
            return response.json();
        })
        .then(data => {
            empleadosLista.innerHTML = ''; // Limpiar la lista antes de agregar empleados
            data.forEach(empleado => {
                empleadosLista.innerHTML += `
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img src="${empleado.foto}" class="card-img-top" alt="Foto de ${empleado.nombre}">
                            <div class="card-body">
                                <h5 class="card-title">${empleado.nombre}</h5>
                                <p class="card-text"><strong>Teléfono:</strong> ${empleado.telefono}</p>
                                <p class="card-text"><strong>Tipo:</strong> ${empleado.tipo}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn btn-warning btn-editar" data-empleado-id="${empleado.id}">Editar</button>
                                    <button type="button" class="btn btn-danger btn-eliminar" data-empleado-id="${empleado.id}">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
        })
        .catch(error => {
            console.error('Error al obtener empleados:', error);
        });
}
        // Llamar a la función para mostrar empleados al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            mostrarEmpleados();
        });
    </script>
</body>
</html>
