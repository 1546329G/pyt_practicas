<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pacientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        .search {
            display: none; /* Oculto por defecto */
            margin-top: 20px;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Gestión de Pacientes</h1>
    
    <!-- Botones que redirigen a otras páginas -->
    <button onclick="window.location.href='index.php'">Registrar Paciente</button>
    <button onclick="mostrarBusqueda()">Buscar Paciente</button>
    <button onclick="window.location.href='ver-clientes.php'">Mostrar Datos de Paciente</button>

    <!-- Campo de búsqueda oculto inicialmente -->
    <div class="search" id="searchSection">
        <input type="text" id="busqueda" placeholder="Buscar paciente por ID o nombre" />
        <button type="button" onclick="buscarPaciente()">Buscar</button>
    </div>

    <!-- Div donde aparecerán los resultados -->
    <div id="resultados"></div>

    <script>
        function mostrarBusqueda() {
            var searchDiv = document.getElementById('searchSection');
            searchDiv.style.display = 'block'; // Muestra el campo de búsqueda
        }

        function buscarPaciente() {
            var busqueda = document.getElementById('busqueda').value;
            var resultadosDiv = document.getElementById('resultados');

            // Enviar la búsqueda al archivo PHP mediante AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'buscar-paciente.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    resultadosDiv.innerHTML = xhr.responseText; // Mostrar los resultados que devuelve PHP
                } else {
                    resultadosDiv.innerHTML = '<p style="color: red;">Error al buscar el paciente.</p>';
                }
            };
            xhr.send('busqueda=' + encodeURIComponent(busqueda));
        }
    </script>

</body>
</html>
