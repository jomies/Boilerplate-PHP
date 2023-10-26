<?php
$url = "https://www.ejemplo.com/pagina/ejemplo";

// Usar parse_url para descomponer la URL
$parsed_url = parse_url($url);

if (isset($parsed_url['host'])) {
    // El dominio se encuentra en $parsed_url['host']
    $domain = $parsed_url['host'];
    echo "El dominio es: $domain";
} else {
    echo "No se pudo extraer el dominio de la URL.";
}

/*
$url = "https://www.example.com/path/to/resource?param1=value1&param2=value2";

$parsed_url = parse_url($url);

if ($parsed_url) {
    echo "Esquema (Scheme): " . $parsed_url['scheme'] . "<br>";
    echo "Host: " . $parsed_url['host'] . "<br>";
    echo "Camino (Path): " . $parsed_url['path'] . "<br>";
    echo "Consulta (Query): " . $parsed_url['query'] . "<br>";
}
*/
?>