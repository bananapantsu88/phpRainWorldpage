<?php
    include("connection.php");
    $connection = connect();

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $query = mysqli_query($connection, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I LOVE RAIN WORLD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <link href="rain_index.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="container-fluid">
            <div class="d-flex">
                <div class="nav">
                    <a href="control_panel.php" class="nav-link text-white">GO BACK</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container pt-4 my-4 text-center">
        <h1>EDITION MENU</h1>
    </div>

    <div class="container mx-auto">
        <form action="update.php" class="needs-validation" method="GET">
            <div class="row">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="col">
                    <label for="firstName" class="form-label"></label>
                    <input type="text" class="form-control" id="firstName" name="nombre" placeholder="First name" value="<?php echo $row['nombre']?>" required>
                </div>
                <div class="col">
                    <label for="lastName" class="form-label"></label>
                    <input type="text" class="form-control" id="lastName" name="apellido" placeholder="Last name" value="<?php echo $row['apellido']?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="Username" class="form-label"></label>
                    <input type="text" class="form-control" id="Username" name="usuario" placeholder="Username" value="<?php echo $row['usuario']?>" required>
                </div>
                <div class="col">
                    <label for="Password" class="form-label"></label>
                    <input type="password" class="form-control" id="Password" name="contrasenia" placeholder="Password" value="<?php echo $row['contrasenia']?>" required>
                </div>
            </div>
            <div class = "row my-4 mx-1">
                <div class="col">
                <div class="row"> <h5>Gender</h5> </div>
                    <input type="radio" id="male" name="sexo" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="sexo" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="sexo" value="other">
                    <label for="other">Other</label><br>
                </div>
                <div class="col text-end">
                    <div class="row text-end"> <h5>Birth Date</h5> </div>
                    <div class="col">
                        <label for="fecha"></label>
                        <input type="date" id="fecha" name="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']?>" required>
                    </div>
                </div>
            </div>
            <div class="row my-4 mx-1">
                <label for="email" class="form-label"></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email: you@example.com" value="<?php echo $row['email']?>" required>
            </div>
            <div class="row my-4 mx-1">
                <label for="comment" class="form-label"></label>
                <textarea class="form-control" id="comment" name="comentario" placeholder="Please add a comment about your opinion about the game" value="<?php echo $row['comentario']?>" required></textarea>
            </div>
            <div class="container text-center"> <button class="btn btn-outline-light mt-2" style="font-size: 32px;" type="submit">CHANGE</button> </div>
        </form>
    </div>

</body>