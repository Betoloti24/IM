<?php $_titulo = "Crear Producto"; ?>
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
                    <li class="nav-item"><h2><a href="inventario.php" class="nav-link">Inventario</a></h2></li>
                    <li class="nav-item ms-5"><h2><a href="buscarproducto.php" class="nav-link">Buscar Producto</a></h2></li>
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
                                    <h1>Ingresar Producto</h1>
                                </div>
                            </div>
                            <form method="POST" action="../php/crear.php" enctype="multipart/form-data">
                                <div class="row py-3 px-5 mt-3">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12 pt-1">
                                                <h2><label for="nombre" class="form-label">Ingrese el Nombre del Producto: </label></h2>
                                                <input type="text" class="form-control form-control-lg mb-2" id="nombre" name="nombre" required autocomplete="off">
                                            </div>
                                            <div class="col-12 pt-1">
                                                <h2><label for="marca" class="form-label">Ingrese la Marca del Producto:</label></h2>
                                                <input type="text" class="form-control form-control-lg mb-2" id="marca" name="marca" required autocomplete="off">
                                            </div>
                                            <div class="col-12 pt-1">
                                                <div class="row mx-0 px-0">
                                                    <div class="col-10 mx-0 px-0">
                                                        <h2><label for="cantidad" class="form-label pt-1">Ingrese la Cantidad del Producto:</label></h2>
                                                    </div>
                                                    <div class="col-2 mx-0 px-0">
                                                        <input type="number" class="form-control form-control-lg mb-2" id="cantidad" name="cantidad" required autocomplete="off" min="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 pt-1">
                                                <div class="row mx-0 px-0">
                                                    <div class="col-10 mx-0 px-0">
                                                        <h2><label for="precio" class="form-label pt-1">Ingrese el Precio del Producto ($):</label></h2>
                                                    </div>
                                                    <div class="col-2 mx-0 px-0">
                                                        <input type="number" class="form-control form-control-lg mb-2" step="any" id="precio" name="precio" required autocomplete="off" min="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 pt-1 mb-3">
                                                <div class="row mx-0 px-0">
                                                    <div class="col-8 mx-0 px-0">
                                                        <h2><label for="peso" class="form-label pt-1">Ingrese el Peso del Producto:</label></h2>
                                                    </div>
                                                    <div class="col-4 mx-0 px-0">
                                                        <div class="row">
                                                            <div class="col-5 mx-0 px-0 ms-1">
                                                                <input type="number" class="form-control form-control-lg mb-2 ps-2" step="any" id="peso" name="peso" required autocomplete="off" min="0">
                                                            </div>
                                                            <div class="col-6 mx-0 px-0">
                                                                <div class="form-group">
                                                                    <select name="unidad" class="form-select form-select-lg ps-2">
                                                                        <option value="KG">KG</option>
                                                                        <option value="L">L</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between mb-3">
                                                <a href="crearproducto.php"><button type="button" class="btn btn-primary px-4"><h3>Limpiar</h3></button></a>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#modalcrear" name="guardar" class="btn btn-primary px-4"><h3>Guardar</h3></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row mb-4">
                                            <div class="col-4"></div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="card-body p-0">
                                                        <img src="../Img/<?php if (isset($producto)) { echo $producto['imagen']; }else{ echo 'imagen.jpg'; } ?>" class="card-img-top" id="imagen" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4"></div>
                                            <div class="col-12 mt-4">
                                                <input type="file" required class="form-control form-control-lg" name="archivo" id="archivo">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-1"><h2>Descripción del Producto: </h2></div>
                                            <div class="col-12">
                                                <textarea required style="font-size: 1.0rem !important; resize: none;" rows="4" name="descripcion" class="form-control" row="3"><?php if (isset($producto)) { echo $producto['descripcion']; } ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL -->
                                <div class="modal fade" id="modalcrear" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal2" data-bs-backdrop="static">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <!-- Cuerpo del header -->
                                            <div class="modal-header">
                                                <h2>AVISO!!</h2>
                                            </div>
                                            <!-- Cuerpo del modal -->
                                            <div class="modal-body">
                                                <p class="h4">Se va a crear en la base de datos un nuevo producto. ¿Esta seguro que desea continuar? </p>
                                            </div>
                                            <!-- Cuerpo del footer -->
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Cerrar"><h4>Cancelar</h4></button>
                                                <button name="guardar" type="submit" class="btn btn-success" data-bs-dismiss="modal" aria-label="Aceptar"><h4>Aceptar</h4></button>
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