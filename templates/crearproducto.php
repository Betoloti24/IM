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

    <?php include("../php/footer.php"); ?>

<?php }else{   
    header("Location: iniciarsesion.php");
} ?>

<?php include("../php/footer.php"); ?>