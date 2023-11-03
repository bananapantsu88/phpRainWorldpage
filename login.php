<?php
    include("connection.php");
    $connection = connect();

    $username = $_POST['usuario'];
    $password = $_POST['contrasenia'];

    if ($username === "bananapantsu88" && $password === "diego123") {    
        $sql = "SELECT * FROM usuarios WHERE usuario = 'bananapantsu88' AND contrasenia = 'diego123'";
        $query = mysqli_query($connection, $sql);
    } else {
        Header("Location: index.php");
    }

    if ($query) {
        Header ("Location: control_panel.php");
    } else {
        die("Unable to relocate" . mysqli_error($connection));
    }
?>