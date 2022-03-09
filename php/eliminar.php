<?php
    include("bd.php");

    if (isset($_GET['id'])){
        $codigo = $_GET['id'];
        $query = "SELECT * FROM productos WHERE cod = $codigo";
        $producto = mysqli_fetch_array(mysqli_query($conn, $query));
        $query = "DELETE FROM productos WHERE cod = $codigo";
        $resultado = mysqli_query($conn, $query);
        if (!$resultado || !$producto){
            $_SESSION['mensaje'] = 'Hay problemas con el servidor, intende eliminar de nuevo mas tarde.';
            $_SESSION['color'] = 'danger';
            $_SESSION['operacion'] = 'ERROR';
            header("Location: ../templates/inventario.php");
        }
        $_SESSION['mensaje'] = 'Se ha eliminado con exito el producto ' . $producto['nombre'] . ' ' . $producto['marca'];
        $_SESSION['color'] = 'success';
        $_SESSION['operacion'] = 'OPERACION REALIZADA CON EXITO';
        header("Location: ../templates/inventario.php");
    }
?>