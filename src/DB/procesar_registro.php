<?php

session_start();
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $direccion = $_POST["direccion"];
    $tarjeta = $_POST["tarjeta"];
    $caducidad = $_POST["caducidad"];
    $codigo_seguridad = $_POST["codigo_seguridad"];

    // Validar los datos
    // (Agrega aquí las validaciones para todos los campos según los requisitos)

    // Si todos los datos son válidos
    if ($datos_validos) {
        // Encriptar la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Guardar la información en la base de datos (reemplaza esto con tu código de conexión a la base de datos)
        $conexion = new mysqli("tu_host", "tu_usuario", "tu_contraseña", "tu_base_de_datos");
        $query = "INSERT INTO usuarios (nombre, apellidos, email, password, direccion, tarjeta, caducidad, codigo_seguridad) VALUES (nombre, apellidosemail, password, direccion, tarjeta, caducidad, codigo_seguridad)";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("ssssssss", $nombre, $apellidos, $email, $hashed_password, $direccion, $tarjeta, $caducidad, $codigo_seguridad);
        if ($stmt->execute()) {
            // Guardar el ID del usuario en la sesión
            $_SESSION['id_usuario'] = $conexion->insert_id;
            header("Location: C:\Users\jmiro\OneDrive\Documentos\GitHub\Boilerplate-PHP\src\DB\lista_usuarios.php"); // Redirigir a la página de lista de usuarios
        } else {
            echo "Error al guardar en la base de datos.";
        }

        $stmt->close();
        $conexion->close();
    } else {
        // Mostrar el formulario con un mensaje de error
        $_SESSION['mensaje_error'] = "Por favor, corrige los errores en el formulario.";
        $_SESSION['datos_formulario'] = $_POST; // Guardar los datos del formulario para mostrarlos nuevamente
        header("Location: registro.html");
    }
} else {
    echo "Acceso no autorizado.";
}
