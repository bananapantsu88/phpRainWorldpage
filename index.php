<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I LOVE RAIN WORLD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <link href="rain_index.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function rain(){
            let amount = 250;
            let body = document.querySelector('body');
            let i = 0;
            while(i < amount){
                let drop = document.createElement('i');

                let size = Math.random() * 2;
                let posX = (Math.floor(Math.random() * (window.innerWidth - 10))) - 10;
                let delay = Math.random() * -20;
                let duration = Math.random() * 1;

                drop.style.width = 0.2 + size+'px';
                drop.style.left = posX + 'px';
                drop.style.animationDelay = delay+'s';
                drop.style.animationDuration = 1+ duration+'s';
                body.appendChild(drop);
                i++
            }
        }
        rain();
    </script>
    <nav>
        <div class="container-fluid">
            <div class="d-flex">
                <div class="nav">
                    <a href="index.php" class="nav-link text-white">Home</a>
                    <a href="who am I.php" class="nav-link text-white">Who am I</a>
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#Login">Login</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" style="color: white">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #222;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Register your info </h1>
                    <button type="button" class="btn-close white" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <ul class="nav text-center py-2" id="myTabs" role="tablist" style="border-bottom: white solid 1px;">
                    <li class="nav-item col">
                        <a class="nav-link active" style="color: white;" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link" style="color: white;" id="sign-in-tab" data-toggle="tab" href="#sign-in" role="tab" aria-controls="sign-in" aria-selected="false">Sign In</a>
                    </li>
                </ul>

                <div class="modal-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form action="login.php" method="POST">
                                <div class="row">
                                    <div class="col">
                                        <label for="username" class="form-label"></label>
                                        <input type="text" class="form-control" id="username" name="usuario" placeholder="Username*" required>
                                    </div>
                                </div>
                                <div class="row mb-4 pb-3">
                                    <div class="col">
                                        <label for="password" class="form-label"></label>
                                        <input type="password" class="form-control" id="password" name="contrasenia" placeholder="Password*" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-light mt-2">Log in</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="sign-in" role="tabpanel" aria-labelledby="sign-in-tab">
                            <form action="create_form.php" class="needs-validation" method="POST">
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
                                <div class="modal-footer">
                                    <button class="btn btn-outline-light mt-2" type="submit">SIGN IN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <div class="container-sm">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="background-color: black;">
                <div class="carousel-item active">
                    <img src="img/carousel-1.jpg" class="d-block mx-auto" alt="carousel-1">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 style="margin: auto;">I LOVE RAIN WORLD!</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" class="d-block mx-auto" alt="carousel-2">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>YOU LOVE RAIN WORLD!?</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-3.jpg" class="d-block mx-auto " alt="carousel-3">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>EVERYONE LOVES RAIN WORLD!</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <div class="container my-4 text-center">
        <h3>Hear this banger while you are here!</h3>
        <audio controls><source src="songs/Train Tunnels.mp3"></audio>
    </div>

    <div class="container mt-4 py-5 text-center">
        <h2>
            If you've found this website, it means that you love Rain World the same as I do! THANK YOU!
            Rain world its the G.O.A.T. and this website is a tribute dedicated to
            Videocult's amazing creation. If you want explore this website, please feel free to do so!
        </h2>
    </div>

    <div class="container my-4 py-5 px-2 text-center" style="background-color: #111; border: solid 10px #222;">
        <div class="row">
            <div class="col">
                <div class="card container" style="width: 80%; background-color: #111; border-color: #111;">
                    <img src="img/rivulet.png" style="margin-top: 12px;" class="card-img-top" alt="rivulet">
                    <div class="card-body">
                    <p class="card-text" style="color: white;">My first favorite slugcat is the Rivulet! (s)he's very aguile and a quick rodent!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card container" style="width: 80%; background-color: #111; border-color: #111;">
                    <img src="img/saint.png" style="margin-top: 12px;" class="card-img-top" alt="saint">
                    <div class="card-body">
                        <p class="card-text" style="color: white;">My second favorite slugcat is the Saint, (s)he's very interesting!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card container" style="width: 80%; background-color: #111; border-color: #111;">
                    <img src="img/survivor.png" style="margin-top: 12px;" class="card-img-top" alt="survivor">
                    <div class="card-body">
                        <p class="card-text" style="color: white;">My third favorite slugcat is the Survivor, (s)he's the first one that we can control!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container my-4 py-5">
        <div class="row">
            <div class="col">
                <h2>Would you like to sign my petition?</h2>
                <p class="text-center">Hi there, If you wanna express Sign here to let people know you love rain world the same as me!</p>
                <div class="text-center"><button style="font-size: 32px" type="button" class="btn-1" data-bs-toggle="modal" data-bs-target="#Login">Sign-in</button></div>
            </div>
            <div class="col">
                <h2>Are you curious who is behind this website?</h2>
                <p class="text-center">As you may already know, I'm a big fan of Rain World, but I also have life outside the computer!</p>
                <div class="text-center"><a href="who am I.html"><button class="btn-1">Who am I</button></a></div>
            </div>
        </div>
    </div>
    <footer class="container-fluid">
        <div class="container">
            <div class="row py-4">
                <div class="col"><h2>References      </h2></div>
                <div class="col"><h2>Content Creators</h2></div>
                <div class="col"><h2>Creators socials</h2></div>
            </div>
            <div class="row">
                <div class="col"><p>This are what I consider the most important english content creators of Rain World. At the right, the social networks of the game creators.</p></div>
                <div class="col text-center">
                    <a href="https://www.youtube.com/@Daszombes"><img style="width: 40px; border-radius: 50%;" src="img/daszombes.jpg" alt="Daszombes"></a><br>
                    <a href="https://www.youtube.com/@Skurry"><img style="width: 40px; border-radius: 50%;" src="img/skurry.jpg" alt="Skurry"></a><br>
                    <a href="https://www.youtube.com/@htwo1"><img style="width: 40px; border-radius: 50%;" src="img/htwo.jpg" alt="HTWO"></a>
                </div>
                <div class="col text-center">
                    <a href="https://twitter.com/VideocultMedia"><img style="width: 40px; border-radius: 15%;" src="img/logos/twitter.png" alt="Twitter"></a><br>
                    <a href="https://www.reddit.com/r/rainworld/"><img style="width: 40px; border-radius: 50%;" src="img/logos/reddit.png" alt="Reddit"></a><br>
                    <a href="https://www.youtube.com/@VIDEOCULTMEDIA"><img style="width: 40px;" src="img/logos/youtube.png" alt="Youtube"></a>
                </div>
            </div>
            <hr class="my-4">
            <p class="text-center pb-4">Contact info: astorgadiego550@gmail.com</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>