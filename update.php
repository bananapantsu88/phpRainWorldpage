<?php
    $connection = connect();

    mysqli_query($conection, "UPDATE usuarios SET nombre = '$name', apellido = '$lname', sexo = '$sex', fecha_nacimiento = '$date', email = '$email', usuario = '$username', contrasenia = '$password', comentario = '$comment'");

?>