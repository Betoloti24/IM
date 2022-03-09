<?php 
    include("bd.php");
    
    if (isset($_POST['entrar'])) {
        $password = $_POST['contrasena'];
        $nombre = $_POST['usuario'];

        $query = "SELECT * FROM usuarios WHERE UPPER(usuario) = UPPER('$nombre') and clave = '$password'";
        $resultado = mysqli_query($conn, $query);

        echo "Hola";

        if (mysqli_num_rows($resultado) == 0) {
            $_SESSION['mensaje'] = 'El usuario y/o la contraseña no son correctos, verifique los datos y vuelva a intentarlo.';
            header("Location: ../templates/iniciarsesion.php");
        }else{
            $_SESSION['usuario'] = TRUE;
            header("Location: ../templates/inventario.php");
        }
    }
?>