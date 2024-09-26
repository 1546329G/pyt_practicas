<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Clínica Veterinaria</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    

</head>
<body class="a">
    
    
 
    <form  action="conexion.php" method="POST">
        <h2>HISTORIA CLINICA VETERINARIA & SPA.</h2>

        <!-- Información del cliente -->
        <h4>Datos del cliente</h4>
        <div class="pacios-letra">
            <label>Propietario:
            <input type="text" name="apellido" placeholder="Escriba su Nombre" required></label><br>
        </div>
        <div class="pacios-letra">
            <label>Dirección:
            <input type="text" name="direccion" placeholder="Escriba su dirección"></label><br>
        </div>
        <div class="pacios-letra">
            <label>Teléfono:
            <input type="text" name="telefono" placeholder="Escriba su Teléfono"  required></label><br>
        </div>
        <div class="pacios-letra">
            <label>Nombre de Paciente:
            <input type="text" name="paciente" placeholder="Escriba Nombre" required></label>
        </div>
        <div class="pacios-letra">
            <label>Fecha de nacimiento:
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
        </div>
        <div class="pacios-letra">
        <label>DNI:
        <input type="text" name="dni" placeholder="Escriba el DNI del cliente" required></label>

        </div>

        <!-- Especie -->
        <h4>Especie</h4>
        <label for="Canino">Canino</label>
        <input type="radio" id="Canino" name="especie" value="Canino">
        <label for="Felino">Felino</label>
        <input type="radio" id="Felino" name="especie" value="Felino">
        <label for="Aves">Aves</label>
        <input type="radio" id="Aves" name="Especie" value="Aves">
        <label for="Lagomorfos">Lagomorfos</label>
        <input type="radio" id="Lagomorfos" name="Especie" value="Lagomorfos">
        <label for="otros">Otros</label>
        <input type="radio" id="otros" name="Especie" value="otros">

        <!-- Raza y sexo -->
        <h4>Raza</h4>
        <label>Raza: <input type="text" name="raza" placeholder="Qué raza es" required></label>
        <label for="Sexo">Sexo:</label>
        <input type="radio" name="sexo" id="masculino" value="masculino"> ♂
        <input type="radio" name="sexo" id="femenino" value="femenino"> ♀
        <label>Color: <input type="text" name="color" placeholder="Color de la mascota" required></label>

        <!-- Seguimiento -->
        <h3>SEGUIMIENTO</h3>
        <label for="fechaSeguimientoInicio">Fecha de inicio:</label>
        <input type="date" id="fechaSeguimientoInicio" name="fechaSeguimientoInicio"> 
        <label for="fechaSeguimientoFin">Fecha de finalización:</label>
        <input type="date" id="fechaSeguimientoFin" name="fechaSeguimientoFin"> 

        <!-- Botón para agregar descripción -->
        <button type="button" id="btndescripcion">Añadir descripción</button>

        <!-- Contenedor donde aparecerán las descripciones -->
        <div id="notas"></div> 

        <div class="submit-group">
            <button type="submit">Enviar datos</button>
        </div>

    </form>
    <script src="index.js"></script>
    

   
</body>
</html>
