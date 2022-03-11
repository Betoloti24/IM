<?php
    include("bd.php");

    if (isset($_POST['guardar'])){
        // Campos a almacenar
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $peso = $_POST['peso'];
        $unidad = $_POST['unidad'];
        $imagen = $_FILES['archivo']['type'];
        $imagen = strtolower($nombre) . strtolower($marca) . '.' .  explode("/",$imagen)[1];
        $ruta = "../Img/".basename($imagen);
        $descripcion = $_POST['descripcion'];

        // Ingresamos la imagen en el directorio
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta)){
            // Insertamos los datos en la BD
            $query = "INSERT INTO productos(nombre, descripcion, precio, cantidad, pesokg, unidad, marca, imagen) VALUES ('$nombre','$descripcion',$precio,$cantidad,$peso,'$unidad','$marca','$imagen')";
            $resultado = mysqli_query($conn, $query);
            if (!$resultado){
                $_SESSION['mensaje'] = 'Se produjo un problema al crear el archivo, intentelo mas tarde';
                header("Location: ../templates/crearproducto.php");    
            }
            // Redireccionamos al inventario
            $_SESSION['mensaje'] = 'Se ha creado con exito el producto ' . $nombre . ' ' . $marca;
            $_SESSION['color'] = 'success';
            $_SESSION['operacion'] = 'OPERACION REALIZADA CON EXITO';
            header("Location: ../templates/inventario.php");
        }
    }
?>