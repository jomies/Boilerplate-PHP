<?php

$texto = "Hello world";
$textoconcat = "";

$textoconcat = ($texto . " " . strtoupper($texto) . " " . strtolower($texto) . " " . strlen($texto));

echo ($textoconcat);
