<?php
            include ("clases/conexion.class.php");
            $conexion = new Database();
            $dbconnection = $conexion->create_connection();

            $idUser = $_GET['IdUser'];

            $sql="SELECT * FROM cupones";
            $resultado = $dbconnection->query($sql);

            if($resultado->num_rows > 0){
                
                $contador =0;
                while($row = $resultado -> fetch_object()){
                    $contador = $contador + 1;
                    echo "<tr>";
                    echo "<td>".$row->Descripcion. "</td>";
                    echo "<td>".$row->PrecioRebaja. "</td>";
                    echo "<td>".$row->FechaInicio. "</td>";
                    echo "<td>".$row->FechaCaucidad. "</td>";
                    echo "</tr>";
                }
            }else{
                echo "<br><div class='alert alert-danger'>NO HAY CUPONES</div>";
            }

            $conexion->close_connection($dbconnection);
        ?>