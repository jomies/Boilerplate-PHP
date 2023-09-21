<?php
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    echo "HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
} else {
    echo "HTTP_USER_AGENT no está definido.<br>";
}

if (isset($_SERVER['HTTP_HOST'])) {
    echo "HTTP_HOST: " . $_SERVER['HTTP_HOST'] . "<br>";
} else {
    echo "HTTP_HOST no está definido.<br>";
}
?>
