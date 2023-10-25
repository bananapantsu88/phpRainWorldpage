<?php
function connect() {

    $server = "localhost";
    $user = "root";
    $pass = "12345678";
    $db = "php";

    $conection = new mysqli($server, $user, $pass, $db);

    if ($conection->connect_error) {
        die("La conexión ha fallado". $conection->connect_error);
    }
#    $conection = mysqli_connect($server, $user, $pass);
#    mysqli_select_db($conection, $db);
    return $conection;
}
?>