<?php
include("direccionamientoMenu.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilologin.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/estilomenu.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <style>
        @media print {
            .noprint {
                visibility: hidden;
            }
        }
    </style>
    <title>Balance</title>
</head>

<body>
    <form method="POST" action="">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark noprint">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <button name="menuBt" type="submit" class="btn btn-lg bg-dark btn_submenunombre">
                            CONTROL FINANZAS
                        </button>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <button name="RegistrarEntradaBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Registrar entrada
                                </button>
                            </li>
                            <li class="nav-item">
                                <button name="RegistrarSalidaBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Registrar salida
                                </button>
                            </li>
                            <li class="nav-item">
                                <button name="VerEntradasBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Ver entradas
                                </button>
                            </li>
                            <li class="nav-item">
                                <button name="VerSalidasBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Ver salidas
                                </button>
                            </li>
                            <li class="nav-item">
                                <button name="VerBalanceBt" type="submit" class="btn btn-lg bg-dark btn_submenu">
                                    Mostrar balance
                                </button>
                            </li>
                        </ul>
                    </div>
                    <span class="navbar-text">
                        <?php

                        ?>
                        <button class="btn btn-outline-light" type="submit" name='salirBt'>SALIR</button>
                    </span>
                </div>
            </nav>
        </header>
    </form>

    <div class="contenedor_login container d-flex flex-column justify-content-center align-items-center ">
        <?php
        include("clases/conexion.class.php");
        $conexion = new Database();
        $dbconnection = $conexion->create_connection();
        $idUser = $_GET['IdUser'];

        // Queries
        $sqlEntradas = "SELECT ren_tipo_entrada, ren_monto FROM `registro_entradas` WHERE ren_usr_id = '$idUser' GROUP BY ren_tipo_entrada";
        $sqlSalidas = "SELECT rsa_tipo_salida, rsa_monto FROM `registro_salidas` WHERE rsa_usr_id = '$idUser' GROUP BY rsa_tipo_salida";
        $sqlFechas = "SELECT MIN(ren_fecha) AS min_fecha, MAX(ren_fecha) AS max_fecha FROM registro_entradas WHERE ren_id = '$idUser' UNION SELECT MIN(rsa_fecha) AS min_fecha, MAX(rsa_fecha) AS max_fecha FROM registro_salidas WHERE rsa_id = '$idUser';";

        // Resultados SQL
        $resEntradas = $dbconnection->query($sqlEntradas);
        $resSalidas = $dbconnection->query($sqlSalidas);
        $resFechas = $dbconnection->query($sqlFechas);

        $conexion->close_connection($dbconnection);

        // Verificar si hay filas por mostrar
        if ($resEntradas->num_rows == 0 || $resSalidas->num_rows == 0) {
            echo "<br><div class='alert alert-danger'>NO HAY REGISTROS DE ENTRADA O SALIDAS DE EFECTIVO</div>";
            return;
        }

        $minFecha = "";
        $maxFecha = "";
        $sumRsa = 0;
        $sumRen = 0;

        if ($row = $resFechas->fetch_assoc()) {
            $minFecha = $row['min_fecha'];
            $maxFecha = $row['max_fecha'];
        }

        $datosEntrada = array();
        $datosSalida = array();
        while ($row = $resEntradas->fetch_assoc()) {
            $datosEntrada[] = [$row['ren_tipo_entrada'], $row['ren_monto']];
            $sumRen += $row['ren_monto'];
        }

        while ($row = $resSalidas->fetch_assoc()) {
            $datosSalida[] = [$row['rsa_tipo_salida'], $row['rsa_monto']];
            $sumRsa += $row['rsa_monto'];
        }
        ?>
        <br>
        <h2 class="text-center text1">
            <?php echo "REPORTE MENSUAL " . $minFecha . "/" . $maxFecha; ?>
        </h2><br>
        <br>
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="2">Entradas</th>
                </tr>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Monto</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                foreach ($datosEntrada as $key => $valor) {
                    echo "<td>" . $valor[0] . "</td>";
                    echo "<td> $" . $valor[1] . "</td>";
                }
                ?>
                <tr>
                    <td><b>Total<b></td>
                    <td>
                        <?php echo "$" . $sumRen ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="2">Salidas</th>
                </tr>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Monto</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                foreach ($datosSalida as $key => $valor) {
                    echo "<td>" . $valor[0] . "</td>";
                    echo "<td> $" . $valor[1] . "</td>";
                }
                ?>
                <tr>
                    <td><b>Total<b></td>
                    <td>
                        <?php echo "$" . $sumRsa ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>
            <?php echo "Balance mensual: $" . $sumRsa + $sumRen ?>
        </p>
        <canvas id="balancePieChart"></canvas>
        <br>
        <button id="printButton" type="button" class="noprint btn btn-primary mb-3">Imprimir</button>
        <script>
            // Datos del gráfico
            var sumRsa = <?php echo $sumRsa; ?>;
            var sumRen = <?php echo $sumRen; ?>;
            var total = sumRsa + sumRen;

            // Obtener el elemento canvas
            var canvas = document.getElementById('balancePieChart').getContext('2d');

            // Crear el gráfico de pastel
            var chart = new Chart(canvas, {
                type: 'pie',
                data: {
                    labels: ["Entradas", "Salidas"],
                    datasets: [{
                        data: [sumRen / total * 100, sumRsa / total * 100],
                        backgroundColor: ['green', 'blue'], // Colores de las porciones
                    }]
                },
                options: {
                    responsive: false
                }
            });

            // Agrega un evento click al botón de impresión
            document.getElementById("printButton").addEventListener("click", () => window.print());
        </script>
    </div>
</body>

</html>