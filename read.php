<?php
    include("connection.php");
    $connection = connect();

    $sql = "SELECT * FROM usuarios";
    $read = mysqli_query($connection, $sql);

    $row = mysqli_fetch_array($read);
?>