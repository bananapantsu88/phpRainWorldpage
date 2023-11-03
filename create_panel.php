<?php
    include("connection.php");
    $connection = connect();

    $name     = $_GET['nombre'];
    $lname    = $_GET['apellido'];
    $sex      = $_GET['sexo'];
    $date     = $_GET['fecha_nacimiento'];
    $email    = $_GET['email'];
    $username = $_GET['usuario'];
    $password = $_GET['contrasenia'];
    $comment  = $_GET['comentario'];

    $sql = "INSERT INTO usuarios (nombre, apellido, sexo, fecha_nacimiento, email, usuario, contrasenia, comentario) VALUES ('$name','$lname','$sex','$date','$email','$username','$password','$comment')";
    $query = mysqli_query($connection, $sql); 
    
    if ($query) {
        Header ("Location: control_panel.php");
    } else {
        die("Unable to relocate" . mysqli_error($connection));
    }
?>