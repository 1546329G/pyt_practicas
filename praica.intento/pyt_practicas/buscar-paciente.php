<?php
// Establecer conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "veterinaria");

// Comprobar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se ha enviado una búsqueda
if (isset($_POST['busqueda'])) {
    $busqueda = $_POST['busqueda'];
    
    // Consulta para seleccionar el paciente por ID
    $sql = "SELECT * FROM clientes WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $busqueda); // "i" indica que el parámetro es un entero
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Comprobar si hay resultados
    if ($result->num_rows > 0) {
        // Crear una tabla para mostrar los resultados
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Apellido</th><th>Dirección</th><th>Teléfono</th><th>DNI</th><th>Paciente</th><th>Fecha de Nacimiento</th><th>Especie</th><th>Raza</th><th>Sexo</th><th>Color</th><th>Fecha de Seguimiento Inicio</th><th>Fecha de Seguimiento Fin</th></tr>";
        
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
        echo "<p style='color: red;'>No se encontraron resultados para el ID: $busqueda.</p>";
    }

    $stmt->close();
    
}

// Cerrar la conexión
$conexion->close();
?>
