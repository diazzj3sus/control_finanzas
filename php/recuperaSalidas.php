<?php
    include ("clases/conexion.class.php");
    $conexion = new Database();
    $dbconnection = $conexion->create_connection();

    $idUser = $_GET['IdUser'];

    $sql="SELECT * FROM registro_salidas WHERE rsa_usr_id = '$idUser' order by rsa_id DESC";
    $resultado = $dbconnection->query($sql);

    if($resultado->num_rows > 0){
        
        
        while($row = $resultado -> fetch_object()){
            echo "<tr>";
            echo "<td>".$row->rsa_tipo_entrada . "</td>";
            echo "<td>".$row->rsa_monto . "</td>";
            echo "<td>".$row->rsa_fecha . "</td>";
            echo "<td><img class=\"rounded mx-auto d-block facturas_entradas\" src=\"".$row->rsa_ruta_factura. "\"></td>";
            echo "</tr>";
        }
    }else{
        echo "<br><div class='alert alert-danger'>NO HAY REGISTROS DE SALIDA DE EFECTIVO</div>";
    }

    $conexion->close_connection($dbconnection);
?>