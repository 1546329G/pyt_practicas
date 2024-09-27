<?php
// Establecer conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "veterinaria");

// Comprobar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para seleccionar todos los clientes
$sql = "SELECT * FROM clientes";
$result = $conexion->query($sql);

// Comprobar si hay resultados
if ($result->num_rows > 0) {
    // Crear una tabla para mostrar los resultados
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>DNI</th>
            <th>Paciente</th>
            <th>Fecha de Nacimiento</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Sexo</th>
            <th>Color</th>
            <th>Fecha de Seguimiento Inicio</th>
            <th>Fecha de Seguimiento Fin</th>
            <th>Descripcion</th>
          </tr>";

    // Mostrar los datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['apellido']}</td>
                <td>{$row['direccion']}</td>
                <td>{$row['telefono']}</td>
                <td>{$row['dni']}</td>
                <td>{$row['paciente']}</td>
                <td>{$row['fechaNacimiento']}</td>
                <td>{$row['especie']}</td>
                <td>{$row['raza']}</td>
                <td>{$row['sexo']}</td>
                <td>{$row['color']}</td>
                <td>{$row['fechaSeguimientoInicio']}</td>
                <td>{$row['fechaSeguimientoFin']}</td>
                <td>{$row['descripcion']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 resultados";
}

// Cerrar la conexión
$conexion->close();
?>
