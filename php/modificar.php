<?php
    include("bd.php");
    if (isset($_POST['guardar'])){
        // Campos a almacenar
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $peso = $_POST['peso'];
        $unidad = $_POST['unidad'];
        $descripcion = $_POST['descripcion'];

        // Consultamos el producto para elminar la imagen anterior
        $query = "SELECT * FROM productos WHERE cod = $id";
        $resultado = mysqli_query($conn, $query);
        $producto = mysqli_fetch_array($resultado);
        
        if ($_FILES['archivo']['size'] != 0){
            // Extraemos la nueva imagen
            $imagen = $_FILES['archivo']['type'];
            $imagen = strtolower($nombre) . strtolower($marca) . '.' .  explode("/",$imagen)[1];
            $ruta = "../Img/".basename($imagen);

            // Guardamos el link de la imagen a eliminar
            $antiguaimagen = "../Img/" . $producto['imagen'];
            // Eliminamos la imagen
            if (unlink($antiguaimagen)){
                // Ingresamos la imagen en el directorio
                if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta)){
                    // Insertamos los datos en la BD
                    $query = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio, cantidad = $cantidad, pesokg = $peso, unidad = '$unidad', marca = '$marca', imagen = '$imagen' WHERE cod = $id";
                    $resultado = mysqli_query($conn, $query);
                    if (!$resultado){
                        $_SESSION['mensaje'] = 'Se produjo un problema al modificar el producto, intentelo mas tarde';
                        header("Location: ../templates/modificar.php");    
                    }
                    // Redireccionamos al inventario
                    $_SESSION['mensaje'] = 'Se ha modificado con exito el producto ' . $producto['nombre'] . ' ' . $producto['marca'];
                    $_SESSION['color'] = 'success';
                    $_SESSION['operacion'] = 'OPERACION REALIZADA CON EXITO';
                    header("Location: ../templates/inventario.php");
                }
            }
        }else{
            // Insertamos los datos en la BD
            $query = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio, cantidad = $cantidad, pesokg = $peso, unidad = '$unidad', marca = '$marca' WHERE cod = $id";
            $resultado = mysqli_query($conn, $query);
            if (!$resultado){
                $_SESSION['mensaje'] = 'Se produjo un problema al modificar el producto, intentelo mas tarde';
                header("Location: ../templates/modificar.php");    
            }
            // Redireccionamos al inventario
            $_SESSION['mensaje'] = 'Se ha modificado con exito el producto ' . $producto['nombre'] . ' ' . $producto['marca'];
            $_SESSION['color'] = 'success';
            $_SESSION['operacion'] = 'OPERACION REALIZADA CON EXITO';
            header("Location: ../templates/inventario.php");
        }
    }
?>