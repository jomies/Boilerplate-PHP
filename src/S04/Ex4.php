<?php

$url = "https://gracia.sallenet.org/login/index.php";

// Utilizar parse_url para obtener el esquema (protocolo)
$parsed_url = parse_url($url);
if ($parsed_url && isset($parsed_url['scheme'])) {
    $protocol = $parsed_url['scheme'];
    echo "Protocolo: $protocol<br>";
} else {
    echo "No se pudo extraer el protocolo de la URL.<br>";
}

// Utilizar pathinfo para obtener la extensión del archivo
$path = $parsed_url['path'];
$file_info = pathinfo($path);
if (isset($file_info['extension'])) {
    $extension = $file_info['extension'];
    echo "Extensión del archivo: $extension<br>";
} else {
    echo "No se pudo extraer la extensión del archivo de la URL.<br>";
}
