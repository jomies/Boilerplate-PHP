<?php

$url = "https://gracia.sallenet.org/login/index.php";

// Encuentra la última barra diagonal ("/")
$ultimaBarra = strrpos($url, "/");

// Obtiene la parte de la URL después de la última barra diagonal
$nombreArchivo = substr($url, $ultimaBarra + 1);

// Elimina la extensión ".php" si está presente
$nombreArchivo = str_replace(".php", "", $nombreArchivo);

echo "Nombre del archivo PHP (usando substrings): " . $nombreArchivo;

$url = "https://gracia.sallenet.org/login/index.php";

// Divide la URL en partes utilizando "/" como delimitador
$partes = explode("/", $url);

// Obtiene el último elemento del array resultante
$nombreArchivo = end($partes);

// Elimina la extensión ".php" si está presente
$nombreArchivo = str_replace(".php", "", $nombreArchivo);

echo ("n\Nombre del archivo PHP (usando explode): " . $nombreArchivo) ;


