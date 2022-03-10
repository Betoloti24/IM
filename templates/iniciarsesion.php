<?php $_titulo = "Iniciar Sesion"; ?>
<?php 
    include("../php/header.php"); 
    include("../php/bd.php"); 
?>

<body class="registroinicio">

    <?php if(isset($_SESSION['mensaje'])) { ?>
        <div class="alert alert-dismissible alert-danger fixed-top">
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
                        
                        <h1 class="mb-0 mt-3">Iniciar Sesión</h1>
                        <form action="../php/ingresar.php" method="POST">
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
                            <div class="final row mx-5 mt-5">
                                <div class="col-12 d-flex justify-content-between my-2">
                                    <a href="registrarse.php" class="btn btn-primary px-4"><h3 class="mb-0">Registrarse</h3></a>
                                    <button class="btn btn-primary px-4" name="entrar"> <h3 class="mb-0">Entrar</h3> </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("../php/footer.php"); ?>