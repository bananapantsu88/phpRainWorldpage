<?php
    $connection = connect();

    mysqli_query($conection,"DELETE FROM usuarios WHERE id = '$id'");
?>