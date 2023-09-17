<?php
     $id= (string)($_GET['IdUser']);
     $id = addslashes( $id );
     $id = str_replace("\'", "", $id);
    if(isset($_POST["submit"])){
        include "clases/conexion.class.php";
        $conexion = new Database();
        $dbconnection = $conexion->create_connection();

        $TipoEntrada= $dbconnection->real_escape_string($_POST["TipoEntrada"]);
        $Monto=$dbconnection->real_escape_string($_POST["Monto"]);
        $Fecha= $dbconnection->real_escape_string($_POST["Fecha"]);
        $check = getimagesize($_FILES["image"]["tmp_name"]);

        if($check !== false){
            
            $nombre_imagen = $_FILES['image']['name'];
            $ruta_temporal = $_FILES['image']['tmp_name'];
            $ruta_destino = "http://localhost/xampp/control_finanzas/imagenesFacturas/imgEntradas/" . $nombre_imagen;
            $ruta_fisica = "C:/xampp/htdocs/xampp/control_finanzas/imagenesFacturas/imgEntradas/" . $nombre_imagen;
            if (move_uploaded_file($ruta_temporal, $ruta_fisica)) {
                // Inserta la ruta de la imagen en la base de datos
                $sql="INSERT INTO registro_entradas (ren_usr_id, ren_tipo_entrada, ren_monto, ren_fecha, ren_ruta_factura) VALUES ('$id','$TipoEntrada','$Monto','$Fecha','$ruta_destino')";
                $resultado = $dbconnection->query($sql);
                if($resultado){
                    header("location:menu.php?IdUser=$id");
                }else{
                    echo "<div class='alert alert-danger'>Error en la bases de datos</div>";
                }
            } else {
                echo "Error al mover la imagen al servidor.";
            }
        }
    }else{
        echo "<div class='alert alert-danger'>Error de la aplicaion</div>";
    }
?>