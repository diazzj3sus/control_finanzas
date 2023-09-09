<?php
     $id= (string)($_GET['IdUser']);
     $id = addslashes( $id );
     $id = str_replace("\'", "", $id);
    if(isset($_POST["submit"])){
            include "clases/conexion.class.php";
            $conexion = new Database();
            $dbconnection = $conexion->create_connection();

            $TipoSalida= $dbconnection->real_escape_string($_POST["TipoSalida"]);
            $Monto=$dbconnection->real_escape_string($_POST["Monto"]);
            $Fecha= $dbconnection->real_escape_string($_POST["Fecha"]);
            $check = getimagesize($_FILES["image"]["tmp_name"]);

            if($check !== false){
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            }
            $sql="INSERT INTO registro_salidas( rsa_usr_id, rsa_tipo_salida, rsa_monto, rsa_fecha, rsa_ruta_factura) VALUES ('$id','$TipoSalida','$Monto','$Fecha','$imgContent')";
            $resultado = $dbconnection->query($sql);

            if($resultado){
                
                header("location:menu.php?IdUser='$id'");
                
            }else{
                echo "<div class='alert alert-danger'>Error en la bases de datos</div>";
            } 
            } 
    

        else{
            echo "<div class='alert alert-danger'>Error de la aplicaion</div>";
        }
?>