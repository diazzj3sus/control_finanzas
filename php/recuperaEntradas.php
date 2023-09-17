<?php
    include ("clases/conexion.class.php");
    $conexion = new Database();
    $dbconnection = $conexion->create_connection();

    $idUser = $_GET['IdUser'];

    $sql="SELECT * FROM registro_entradas WHERE ren_usr_id = '$idUser' order by ren_id DESC";
    $resultado = $dbconnection->query($sql);

    if($resultado->num_rows > 0){
        
        $contador =0;
        while($row = $resultado -> fetch_object()){
            $contador = $contador + 1;
            echo "<tr>";
            echo "<td>".$row->ren_tipo_entrada . "</td>";
            echo "<td>".$row->ren_monto . "</td>";
            echo "<td>".$row->ren_fecha . "</td>";
            echo "<td> <div id=\"imagenModal".$contador."\" class=\"modal\">
            <a class=\"cerrar-enlace\" href=\"\">✖</a>
                <img src=\"".$row->ren_ruta_factura. "\" alt=\"Imagen Grande\">
            </div>
            <a class=\"imagen-pequena\" href=\"#imagenModal".$contador."\">  <img class=\"rounded mx-auto d-block facturas_entradas\" src=\"".$row->ren_ruta_factura. "\"></a></td>";
            echo "</tr>";
        }
    }else{
        echo "<br><div class='alert alert-danger'>NO HAY REGISTROS DE ENTRADA DE EFECTIVO</div>";
    }

    $conexion->close_connection($dbconnection);
?>
