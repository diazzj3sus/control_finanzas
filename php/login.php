<?php
    session_start();
    if(isset($_POST["entrar"])){
        if(empty($_POST["correo"])){
            echo "<div class='alert alert-danger'>DEBE DE INGRESAR EL CORREO ELECTRONICO</div>";
        }elseif(empty($_POST["password"])){
            echo "<div class='alert alert-danger'>DEBE DE INGRESAR LA CONTRASEÑA</div>";
        }else{
            /*include_once "../clases/conexion.class.php";*/
            include "clases/conexion.class.php";
            $conexion = new Database();
            $dbconnection = $conexion->create_connection();

            $correo= $dbconnection->real_escape_string($_POST["correo"]);
            $clave=$dbconnection->real_escape_string($_POST["password"]);
            $sql="SELECT * FROM usuarios WHERE usr_correo = '$correo' AND usr_contraseña = '$clave'";
            $resultado = $dbconnection->query($sql);


            if($resultado->num_rows > 0){
                $Iduser = $resultado->fetch_assoc();
                
                $IdUser = $Iduser['usr_id'];
                /*
                $nombre = $Iduser['usr_nombre'].' '. $Iduser['usr_primer_apellido'].' '. $Iduser['usr_segundo_apellido'];
                */
                $_SESSION['nombre'] = $Iduser['usr_nombre'].' '. $Iduser['usr_primer_apellido'].' '. $Iduser['usr_segundo_apellido'];;
                header("location:menu.php?IdUser=$IdUser");
                $conexion->close_connection($dbconnection);
            }else{
                echo "<div class='alert alert-danger'>NO SE ENCONTRO UN USUARIO CON LOS DATOS INGRESADOS</div>";
            }
        }
    }
    


?>