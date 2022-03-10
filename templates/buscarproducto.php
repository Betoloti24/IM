<?php $_titulo = "Buscar Producto"; ?>
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
                    <li class="nav-item ms-5"><h2><a href="crearproducto.php" class="nav-link">Ingresar Producto</a></h2></li>
                    <li class="nav-item ms-5"><h2><a href="../php/cerrarsesion.php" class="nav-link">Cerrar Sesión</a></h2></li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top: 12rem !important;">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>Consultar Producto</h1>
                        </div>
                        <div class="card-body">
                            <div class="row p-3">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-8 pt-1 mb-4">
                                            <h2>Ingrese el Código del Producto: </h2>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control form-control-lg" id="usuario" name="usuario"  autocomplete="off">
                                        </div>
                                        <div class="col-12 pt-1 mb-4">
                                            <h2><b>Nombre del Producto:</b> Harina Pan</h2>
                                        </div>
                                        <div class="col-12 pt-1 mb-4">
                                            <h2><b>Cantidad del Producto:</b> 10 unidades</h2>
                                        </div>
                                        <div class="col-12 pt-1 mb-4">
                                            <h2><b>Peso del Producto:</b> 1kg</h2>
                                        </div>
                                        <div class="col-12 pt-1 mb-4">
                                            <h2><b>Precio del Producto:</b> 1.5$</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body bg-light">
                                                    <img src="../Img/aceitemazeite.jpg" class="card-img-top" >
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="col-4"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12"><h2>Descripción del Producto: </h2></div>
                                        <div class="col-12">
                                            <textarea style="font-size: 1.6rem !important;" name="decripcion" class="form-control" row="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit corrupti maxime eligendi adipisci quaerat explicabo ullam dolorem inventore eaque eos!</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
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