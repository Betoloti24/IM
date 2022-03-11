<?php $_titulo = "Registrarse"; ?>
<?php 
    include("../php/header.php"); 
    include("../php/bd.php");
?>

<body class="registroinicio">

    <?php if(isset($_SESSION['mensaje'])) { ?>
        <div class="alert alert-dismissible alert-danger fixed-bottom rounded-0 mb-0">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4>Error!</h4>
            <p class="mb-0"><?php echo $_SESSION['mensaje'] ?></p>
        </div>
    <?php session_unset(); $_SESSION['usuario'] = TRUE;} ?>

    <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6 my-5">
                <div class="textoblanco card my-5">
                    <div class="card-header bg-light text-center">
                        <img class="logo my-3" src="../Img/logo-gris.png" alt="">
                    </div>
                    <div class="card-footer bg-dark text-center">
                        <h1 class="mb-0 mt-3">Registrarse</h1>
                        <form action="../php/registrar.php" method="POST">
                            <div class="row mx-5 mt-2">
                                <div class="col-12 text-start">
                                    <h2><label for="usuario" class="form-label">Ingrese el Nombre de Usuario</label></h2>
                                    <input type="text" class="form-control form-control-lg mb-2" id="usuario" name="usuario" required autocomplete="off">
                                </div>
                            </div>
                            <div class="row mx-5 mt-2">
                                <div class="col-12 text-start">
                                    <h2><label for="contrasena" class="form-label">Ingrese su Contraseña</label></h2>
                                    <input type="password" class="form-control form-control-lg mb-2" id="contrasena" name="contrasena" required autocomplete="off">
                                </div>
                            </div>
                            <div class="final row mx-5 mt-1">
                                <div class="col-8 text-start mt-1">
                                    <h2><label for="cod" class="form-label">Codigo de Seguridad</label></h2>
                                    <input type="password" class="form-control form-control-lg mb-2" id="cod" name="cod" required autocomplete="off">
                                </div>
                                <div class="col-4 d-block mb-2">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <a href="iniciarsesion.php" class="btn btn-primary px-2 mb-1"><h3 class="mb-0">Iniciar Sesion</h3></a> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="btn btn-primary px-4" name="entrar"> <h3 class="mb-0">Entrar</h3> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("../php/footer.php"); ?>