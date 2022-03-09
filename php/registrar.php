<?php 
    include("bd.php");
    
    if (isset($_POST['entrar'])) {
        $password = $_POST['contrasena'];
        $nombre = $_POST['usuario'];
        $clave = $_POST['cod'];
        if ($clave == '2357'){
            $query = "SELECT * FROM usuarios WHERE UPPER(usuario) = UPPER('$nombre')";
            $resultado = mysqli_query($conn, $query);
            if (mysqli_num_rows($resultado) != 0) {
                $_SESSION['mensaje'] = 'El usuario ingresado ya existe en la base de datos.';
                header("Location: ../templates/registrarse.php");
            }else{
                $query2 = "INSERT INTO usuarios (usuario, clave) VALUES ('$nombre', '$password')";
                $resultado = mysqli_query($conn, $query2);
                if (!$resultado){
                    $_SESSION['mensaje'] = 'Sin conexión, intente acceder en otro momento.';
                    header("Location: ../templates/registrarse.php");
                }else{
                    $_SESSION['usuario'] = TRUE;
                    header("Location: ../templates/inventario.php");
                }
            }
        }else{
            $_SESSION['mensaje'] = 'La clave de seguridad ingresada no es correcta, por favor ingrese la clave correcta y vuelva a intentar.';
            header("Location: ../templates/registrarse.php");
        }
    }
?>