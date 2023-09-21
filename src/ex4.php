<?php
echo "Las 10 primeras potencias de 2 son:<br>";

for ($i = 2; $i <= 11; $i++) {
    $potencia = pow(2, $i);
    echo "2^$i = $potencia";
}
?>
