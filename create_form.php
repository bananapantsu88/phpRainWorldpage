<?php
    include("connection.php");
    $connection = connect();

    $name     = $_POST['nombre'];
    $lname    = $_POST['apellido'];
    $sex      = $_POST['sexo'];
    $date     = $_POST['fecha_nacimiento'];
    $email    = $_POST['email'];
    $username = $_POST['usuario'];
    $password = $_POST['contrasenia'];
    $comment  = $_POST['comentario'];

    $sql = "INSERT INTO usuarios (nombre, apellido, sexo, fecha_nacimiento, email, usuario, contrasenia, comentario) VALUES ('$name','$lname','$sex','$date','$email','$username','$password','$comment')";
    $query = mysqli_query($connection, $sql); 
    
    if ($query) {
        Header ("Location: index.php");
    } else {
        die("Unable to relocate" . mysqli_error($connection));
    }
?>