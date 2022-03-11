<?php $_titulo = "Buscar Producto"; ?>
<?php include("../php/bd.php"); ?>
<?php if (isset($_SESSION['usuario'])) { ?>

    <?php $_titulo = "Inventario"; ?>

    <?php 
        include("../php/header.php"); 
        if (isset($_POST['codigo']) && is_numeric($_POST['codigo'])){
            $codigo = $_POST['codigo'];
            $query = "SELECT * FROM productos WHERE cod = $codigo";
            $resultado = mysqli_query($conn, $query);
            if (mysqli_num_rows($resultado) == 0) {
                $_SESSION['mensaje'] = 'El código del producto ingresado no existe en la base de datos.';
            }else{
                $producto = mysqli_fetch_array($resultado);
            }
        }elseif (isset($_POST['codigo']) && !is_numeric($_POST['codigo'])) {
            $_POST['codigo'] = 0;
            $_SESSION['mensaje'] = 'El código del producto ingresado no es valido, ingrese solo números.';
        }
    ?>

    <body class="inventariomod">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container my-2">
                <img class="navbar-brand" src="../Img/logo-blanco.png" width="150px">
                <ul class="navbar-nav d-flex align-items-end">
                    <li class="nav-item"><h2><a href="inventario.php" class="nav-link">Inventario</a></h2></li>
                    <li class="nav-item ms-5"><h2><a href="crearproducto.php" class="nav-link">Ingresar Producto</a></h2></li>
                    <li class="nav-item ms-5"><h2><a href="../php/cerrarsesion.php" class="nav-link">Cerrar Sesión</a></h2></li>
                </ul>
            </div>
        </nav>

        <?php if(isset($_SESSION['mensaje'])) { ?>
            <div class="alert alert-dismissible alert-danger fixed-bottom mb-0 rounded-0">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4>Error!</h4>
                <p class="mb-0"><?php echo $_SESSION['mensaje'] ?></p>
            </div>
        <?php session_unset(); $_SESSION['usuario'] = TRUE; } ?>

        <div class="container" style="margin-top: 12rem !important;">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body bg-light shadow-lg">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center my-3">
                                    <h1>Consultar Producto</h1>
                                </div>
                            </div>
                            <form method="POST" action="buscarproducto.php">
                                <div class="row py-3 px-5 mt-3">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-9 pt-1 mb-4">
                                                <h2><label for="codigo" class="form-label mb-0">Ingrese el Codigo del Producto</label></h2>
                                            </div>
                                            <div class="col-3">
                                                <input type="text" placeholder="<?php if (isset($producto)) { echo $producto['cod']; } ?>" class="form-control form-control-lg" id="codigo" name="codigo"  autocomplete="off">
                                            </div>
                                            <div class="col-12 pt-1 mb-4">
                                                <h2>Nombre del Producto: <?php if (isset($producto)) { echo $producto['nombre'] . ' ' . $producto['marca']; } ?></h2>
                                            </div>
                                            <div class="col-12 pt-1 mb-4">
                                                <h2>Cantidad del Producto: <?php if (isset($producto)) { echo $producto['cantidad'] . 'unidades'; } ?> </h2>
                                            </div>
                                            <div class="col-12 pt-1 mb-4">
                                                <h2>Peso del Producto: <?php if (isset($producto)) { echo $producto['pesokg'] . strtoupper($producto['unidad']); } ?></h2>
                                            </div>
                                            <div class="col-12 pt-1 mb-4">
                                                <h2>Precio del Producto: <?php if (isset($producto)) { echo $producto['precio'] . '$'; } ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row mb-4">
                                            <div class="col-4"><a href="buscarproducto.php"><button type="submit" class="btn btn-primary py-2" name="buscar"><h4>Buscar</h4></button></a></div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="card-body p-0">
                                                        <img src="../Img/<?php if (isset($producto)) { echo $producto['imagen']; }else{ echo 'imagen.jpg'; } ?>" class="card-img-top" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-1"><h2>Descripción del Producto: </h2></div>
                                            <div class="col-12">
                                                <textarea style="font-size: 1.0rem !important; resize: none;" rows="4" name="decripcion" class="form-control" row="3"><?php if (isset($producto)) { echo $producto['descripcion']; } ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

    <?php include("../php/footer.php"); ?>

<?php }else{   
    header("Location: iniciarsesion.php");
} ?>

<?php include("../php/footer.php"); ?>