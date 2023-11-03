<?php
    include("connection.php");
    $connection = connect();

    $id       = $_GET['id'];
    $name     = $_GET['nombre'];
    $lname    = $_GET['apellido'];
    $sex      = $_GET['sexo'];
    $date     = $_GET['fecha_nacimiento'];
    $email    = $_GET['email'];
    $username = $_GET['usuario'];
    $password = $_GET['contrasenia'];
    $comment  = $_GET['comentario'];

    $sql = "UPDATE usuarios SET nombre = '$name', apellido = '$lname', sexo = '$sex', fecha_nacimiento = '$date', email = '$email', usuario = '$username', contrasenia = '$password', comentario = '$comment' WHERE id = '$id'";
    $query = mysqli_query($connection, $sql);

    if ($query) {
        Header("Location: control_panel.php");
    }
?>