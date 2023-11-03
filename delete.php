<?php
    include("connection.php");
    $connection = connect();

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $query = mysqli_query($connection, $sql);

    if ($query) {
        Header("Location: control_panel.php");
    }
?>