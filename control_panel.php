<?php
    include("connection.php");
    $connection = connect();

    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($connection, $sql);
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
                    <a href="index.php" class="nav-link text-white">Home</a>
                    <a href="who am I.html" class="nav-link text-white">Who am I</a>
                </div>
<!--                <div class="text-end">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#Login">Login</button>
                </div>
-->            </div>
        </div>
    </nav>
    
    <div class="container my-4 text-center">
        <h5>Hear this to focus!</h5>
        <audio controls><source src="songs/Train Tunnels.mp3"></audio>
    </div>

    <div class="container-fluid mt-4 text-center" style="background-color: #111; border: solid 10px #222">
        <div class="row">
            <div class="col-md-3" style="border-right: solid 10px #222">
                <div class="row" style=" border-bottom: solid 10px #222"><h5 class="py-4">FORM</h5></div>
                <div class="row pb-4">
                    <form action="create_panel.php" class="needs-validation" method="GET">
                        <div class="row">
                            <div class="col">
                                <label for="firstName" class="form-label"></label>
                                <input type="text" class="form-control" id="firstName" name="nombre" placeholder="First name" required>
                            </div>
                            <div class="col">
                                <label for="lastName" class="form-label"></label>
                                <input type="text" class="form-control" id="lastName" name="apellido" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="Username" class="form-label"></label>
                                <input type="text" class="form-control" id="Username" name="usuario" placeholder="Username" required>
                            </div>
                            <div class="col">
                                <label for="Password" class="form-label"></label>
                                <input type="password" class="form-control" id="Password" name="contrasenia" placeholder="Password" required>
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
                                    <input type="date" id="fecha" name="fecha_nacimiento" required>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4 mx-1">
                            <label for="email" class="form-label"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email: you@example.com" required>
                        </div>
                        <div class="row my-4 mx-1">
                            <label for="comment" class="form-label"></label>
                            <textarea class="form-control" id="comment" name="comentario" placeholder="Please add a comment about your opinion about the game" required></textarea>
                        </div>
                        <div class="container text-center">
                            <button class="btn btn-outline-light mt-2" type="submit">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row my-auto">
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Id        </h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Name      </h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Last Name </h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Sex       </h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Birth Date</h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Email     </h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>User Name </h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Password  </h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Comment   </h5></div>
                    <div class="col py-4" style=" border-bottom: solid 10px #222"><h5>Options   </h5></div>
                </div>
                <?php
                    while($row = mysqli_fetch_array($query)) {
                ?>
                <div class = "row" style="border-bottom: solid 10px #222">
                    <div class = "col py-4 my-auto"><?php echo $row['id']              ?></div>
                    <div class = "col py-4 my-auto"><?php echo $row['nombre']          ?></div>
                    <div class = "col py-4 my-auto"><?php echo $row['apellido']        ?></div>
                    <div class = "col py-4 my-auto"><?php echo $row['sexo']            ?></div>
                    <div class = "col py-4 my-auto"><?php echo $row['fecha_nacimiento']?></div>
                    <div class = "col py-4 my-auto"><?php echo $row['email']           ?></div>
                    <div class = "col py-4 my-auto"><?php echo $row['usuario']         ?></div>
                    <div class = "col py-4 my-auto"><?php echo $row['contrasenia']     ?></div>
                    <div class = "col py-4 my-auto"><?php echo $row['comentario']      ?></div>
                    <div class = "col py-4 my-auto">
                        <a href="update.php?id=<?php  echo $row['id']?>" class="btn btn-outline-light" style="font-size: 16px">Edit</a>
                        <a href="delete.php?id=<?php  echo $row['id']?>" class="btn btn-outline-light"  style="font-size: 16px">Delete</a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>