<?php include("../php/bd.php"); ?>
<?php if (isset($_SESSION['usuario'])) { ?>

    <?php $_titulo = "Inventario"; ?>

    <?php 
        include("../php/header.php"); 
    ?>

    <body class="inventariomod">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container my-2">
                <img class="navbar-brand" src="../Img/logo-blanco.png" width="150px">
                <ul class="navbar-nav d-flex align-items-end">
                    <li class="nav-item"><h2><a href="crearproducto.php" class="nav-link">Ingresar Producto</a></h2></li>
                    <li class="nav-item ms-5"><h2><a href="buscarproducto.php" class="nav-link">Buscar Producto</a></h2></li>
                    <li class="nav-item ms-5"><h2><a href="../php/cerrarsesion.php" class="nav-link">Cerrar Sesión</a></h2></li>
                </ul>
            </div>
        </nav>
        <div class="row m-3" style="margin-top: 10rem !important;">

            <?php if(isset($_SESSION['mensaje'])) { ?>
                <div class="alert alert-dismissible alert-<?php echo $_SESSION['color'] ?> fixed-top">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4><?php echo $_SESSION['operacion'] ?> !!</h4>
                    <p class="mb-0"><?php echo $_SESSION['mensaje'] ?></p>
                </div>
            <?php session_unset(); $_SESSION['usuario'] = TRUE;} ?>

            <?php  
                $_query = "SELECT * FROM productos";
                $_resultado = mysqli_query($conn, $_query);

                while ($row = mysqli_fetch_array($_resultado)) { ?>
                        <div class="col-2 mb-4">
                            <div class="item card">
                                <img src="../Img/<?php echo $row['imagen'] ?>" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-tittle mb-2"><?php echo $row['nombre'] ?> <?php echo $row['marca'] ?></h4>
                                    <h5 class="card-subtitle text-muted"><b>Cod:</b> <?php echo $row['cod'] ?></h5>
                                    <h5 class="card-subtitle text-muted"><b>Peso:</b> <?php echo $row['pesokg'] ?><?php echo $row['unidad'] ?></h5>
                                    <h5 class="card-subtitle text-muted"><b>Cantidad:</b> <?php echo $row['cantidad'] ?> unidades</h5>
                                    <h5 class="card-subtitle text-muted mb-2"><b>Precio:</b> <?php echo $row['precio'] ?>$</h5>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary me-1"><h5>Modificar</h5></button>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['cod'] ?>"><h5>X</h5></button>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } ?>

            <?php  
                $_resultado = mysqli_query($conn, $_query);
                while ($row = mysqli_fetch_array($_resultado)) { ?>
                    <div class="modal fade" id="modal<?php echo $row['cod'] ?>" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal2" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Cuerpo del header -->
                                <div class="modal-header">
                                    <h2>AVISO!!</h2>
                                </div>
                                <!-- Cuerpo del modal -->
                                <div class="modal-body">
                                    <p class="h4">Se van a eliminar todas las referencias del producto <b><?php echo $row['nombre'] ?> <?php echo $row['marca'] ?></b>. ¿Esta seguro que desea eliminarlo? </p>
                                </div>
                                <!-- Cuerpo del footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Cerrar"><h4>Cancelar</h4></button>
                                    <a href="../php/eliminar.php?id=<?php echo $row['cod'] ?>"><button class="btn btn-success" data-bs-dismiss="modal" aria-label="Aceptar"><h4>Aceptar</h4></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php } ?>
            

        </div>

    <?php include("../php/footer.php"); ?>

<?php }else{   
    header("Location: iniciarsesion.php");
} ?>
