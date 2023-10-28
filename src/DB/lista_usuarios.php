<?php

session_start();

// Verificar si el usuario está autenticado (puedes agregar más verificaciones según tu sistema de autenticación)
if (!isset($_SESSION['id_usuario'])) {
    echo "Acceso no autorizado.";
    exit;
}

// Obtener la lista de usuarios de la base de datos y mostrarla en una tabla (reemplaza esto con tu código)
$conexion = new mysqli("tu_host", "tu_usuario", "tu_contraseña", "tu_base_de_datos");
$query = "SELECT * FROM usuarios";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    echo "<h1>Lista de Usuarios</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>Email</th><th>Dirección</th><th>Tarjeta</th><th>Acciones</th></tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellidos'] . "</td>";
        echo "<td>" . $fila['email'] . "</td>";
        echo "<td>" . $fila['direccion'] . "</td>";
        echo "<td>" . $fila['tarjeta'] . "</td>";
        echo "<td><a href='editar_usuario.php?id=" . $fila['id'] . "'>Editar</a> | <a href='eliminar_usuario.php?id=" . $fila['id'] . "'>Eliminar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay usuarios en la base de datos.";
}

$conexion->close();
