<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinaria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si se ha enviado el formulario, insertar los datos en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apellido = $_POST["apellido"] ?? '';
    $direccion = $_POST["direccion"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $paciente = $_POST["paciente"] ?? '';
    $fechaNacimiento = $_POST["fechaNacimiento"] ?? '';
    $dni = $_POST["dni"] ?? '';
    $especie = $_POST["especie"] ?? '';
    $raza = $_POST["raza"] ?? '';
    $sexo = $_POST["sexo"] ?? '';
    $color = $_POST["color"] ?? '';
    $fechaSeguimientoInicio = $_POST["fechaSeguimientoInicio"] ?? '';
    $fechaSeguimientoFin = $_POST["fechaSeguimientoFin"] ?? '';
    $descripcion = $_POST["descripcion"] ?? '';
    // Consulta SQL para insertar datos
    $sql = "INSERT INTO clientes (apellido, direccion, telefono, paciente, fechaNacimiento, dni, especie, raza, sexo, color, fechaSeguimientoInicio, fechaSeguimientoFin, descripcion)
    VALUES ('$apellido', '$direccion', '$telefono', '$paciente', '$fechaNacimiento', '$dni', '$especie', '$raza', '$sexo', '$color', '$fechaSeguimientoInicio', '$fechaSeguimientoFin', '$descripcion')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo cliente registrado exitosamente.";
    } else {
        echo "Error al registrar el cliente: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
