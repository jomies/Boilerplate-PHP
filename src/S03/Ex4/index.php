<?php

namespace Ex4;

require_once('DeDos.php');
require_once('DeTres.php');

$serie1 = new DeDos(0, 0);
echo "Serie 1 (DeDos): <br>";
$serie1->setComenzar(2);
for ($i = 0; $i < 5; $i++) {
    echo $serie1->getSiguiente() . " ";
}
$serie1->reiniciar();
echo "<br>";
echo "Tipo de serie: ";
DeDos::tipoDeSerie();

$serie2 = new DeTres(1, 1);
echo "<br><br>  Serie 2 (DeTres): <br>";
$serie2->setComenzar(3);
for ($i = 0; $i < 5; $i++) {
    echo $serie2->getSiguiente() . " ";
}
$serie2->reiniciar();
echo "<br>";
echo "Tipo de serie: ";
DeTres::tipoDeSerie();
