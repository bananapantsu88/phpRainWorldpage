<?php

include("conection.php");

$name = "pepe";
$lname = "rivas";
$sex = "male";
$date = "2020-10-20";
$email = "pepe@gmail.com";
$username = "pepitox";
$password = "1234";

mysqli_query($conection, "INSERT INTO usuarios (nombre, apellido, sexo, fecha_nacimiento, email, usuario, contrasenia) VALUES ('$name','$lname','$sex','$date','$email','$username','$password')");

?>