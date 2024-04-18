<?php
if($_REQUEST['usuario']=="")
    {
        echo ("El campo usuario no puede se vacio. <br>");
    }
else
    {
       $usuario = addslashes(strtolower($_REQUEST['usuario']));
       
    }

if($_REQUEST['password']=="")
    {
        echo ("El campo contraseña no puede se vacio. <br>");
    }
else
    {
       $password = addslashes($_REQUEST['password']);
    }
      
include 'conexion/conexion.php';
$registros = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE Usuario ='$usuario' ")
         or die("Problemas en el select:" . mysqli_error($conexion));
$row_cnt = mysqli_num_rows($registros);
$registro = mysqli_fetch_assoc($registros);
$password2 = $registro['Contrasena'];

if($password===$password2)
        {
            session_start();
            $_SESSION["usuario"] = $usuario;
            header('Location: principal.php');
            
        }            
    else
        {
            echo("Contraseña no valida");
            ?>
            <script>
                location.replace('index.php');
            </script>
            <?php
        }     

mysqli_close($conexion);
?>