<?php $_titulo = "Iniciar Sesion"; ?>
<?php include("../php/header.php"); ?>

<body class="registroinicio">
    <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6 my-5">
                <div class="textoblanco card my-5">
                    <div class="card-header bg-light text-center">
                        <img class="logo my-3" src="../Img/logo-gris.png" alt="">
                    </div>
                    <div class="card-footer bg-dark text-center">
                        <h1 class="mb-0 mt-3">Iniciar Sesión</h1>
                        <div class="row mx-5 mt-2">
                            <div class="col-12 text-start">
                                <h2><label for="usuario" class="form-label">Ingrese el Nombre de Usuario</label></h2>
                                <input type="text" class="form-control form-control-lg mb-2" id="usuario" required autocomplete="off">
                            </div>
                        </div>
                        <form action="../php/ingresar.php" method="POST">
                            <div class="row mx-5 mt-2">
                                <div class="col-12 text-start">
                                    <h2><label for="contrasena" class="form-label">Ingrese su Contraseña</label></h2>
                                    <input type="password" class="form-control form-control-lg mb-2" id="contrasena" required autocomplete="off">
                                </div>
                            </div>
                            <div class="final row mx-5 mt-5">
                                <div class="col-12 d-flex justify-content-between my-2">
                                    <a href="registrarse.php" class="btn btn-primary px-4"><h3 class="mb-0">Registrarse</h3></a>
                                    <button class="btn btn-primary px-4"> <h3 class="mb-0">Entrar</h3> </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("../php/footer.php"); ?>