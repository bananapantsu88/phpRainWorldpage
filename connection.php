<?php

$server = "localhost";
$user = "root";
$pass = "12345678";
$db = "php";

$conection = new mysqli($server, $user, $pass, $db);

if ($conection->connect_errno) {
    die("La conexión ha fallado" . $conection->connect_errno);
}

?>