<?php
    include("connection.php");
    $connection = connect();

    $sql = "SELECT * FROM usuarios";
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
                    <a href="index.php" class="nav-link text-white">Home</a>
                    <a href="who am I.html" class="nav-link text-white">Who am I</a>
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#Login">Login</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: white">
        <div class="modal-dialog">
            <div class="modal-content"  style="background-color: #222;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Login </h1>
                    <button type="button" class="btn-close white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="username" class="form-label"></label>
                                    <input type="text" class="form-control" id="username" placeholder="Username*" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="password" class="form-label"></label>
                                    <input type="password" class="form-control" id="password" placeholder="Password*" required="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light mt-2" data-bs-dismiss="modal">Log in</button>
                    <a href="form.php"><button type="button" class="btn btn-outline-light">Sign-up</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->
    
    <div class="container my-4 text-center">
        <h5>Hear this to focus!</h5>
        <audio controls><source src="songs/Train Tunnels.mp3"></audio>
    </div>

    <div class="container-fluid mt-4 text-center" style="background-color: #111; border: solid 10px #222">
        <div class="row">
            <div class="col py-4" style=" border: solid 10px #222"><h5>Id        </h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>Name      </h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>Last Name </h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>Sex       </h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>Birth Date</h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>Email     </h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>User Name </h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>Password  </h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>Comment   </h5></div>
            <div class="col py-4" style=" border: solid 10px #222"><h5>Options   </h5></div>
        </div>
        <div class = "row">
            <?php
                while($row = mysqli_fetch_array($query)){
            ?>
                <div class = "col py-4"><?php echo $row['id']              ?></div>
                <div class = "col py-4"><?php echo $row['nombre']          ?></div>
                <div class = "col py-4"><?php echo $row['apellido']        ?></div>
                <div class = "col py-4"><?php echo $row['sexo']            ?></div>
                <div class = "col py-4"><?php echo $row['fecha_nacimiento']?></div>
                <div class = "col py-4"><?php echo $row['email']           ?></div>
                <div class = "col py-4"><?php echo $row['usuario']         ?></div>
                <div class = "col py-4"><?php echo $row['contrasenia']     ?></div>
                <div class = "col py-4"><?php echo $row['comentario']      ?></div>
            <?php
                }
            ?>
            <div class = "col py-4">
                <a href="update.php?id=<?php # echo $row['id']?>" class="btn btn-outline-light" style="font-size: 16px">Edit</a>
                <a href="delete.php?id=<?php # echo $row['id']?>" class="btn btn-outline-light"  style="font-size: 16px">Delete</a>
            </div> 
            
        </div>
    </div>


</body>
</html>